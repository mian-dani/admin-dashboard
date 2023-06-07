<?php

namespace App\Http\Controllers;

use App\Exports\UserExport;
use Maatwebsite\Excel\Facades\Excel;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;
use App\Mail\WelcomeEmail;
use Illuminate\Support\Facades\Mail;




class UserController extends Controller
{
                            /// initializing Yajra table

    public function yajraInitialize(Request $request){
        if ($request->ajax()) {
            $users = User::with('country')->get();

            return DataTables::of($users)->addIndexColumn()
                ->addColumn('action', function ($user) {
                     return '
                        <button onclick="viewClicked(' . $user->id . ')" id="viewUserBtn" class="btn btn-view">View</button>
                        <button onclick="editClicked(' . $user->id . ')" id="editUserBtn" class="btn btn-edit">Edit</button>
                        <button onclick="deleteClicked(' . $user->id . ')"  id="deleteCrud" type="button" class="btn btn-delete">Delete</button>
                    ';
                })->rawColumns(['action'])
                ->make(true);
        }
        return view('welcome');
    }



        // Mian view on route ("/")   
    public function dashboard(){
        
        ////////////////          Daily User's Register Frequency Chart handler       ////////////
        $startDate = Carbon::now()->subDays(30); // Retrieve data for the last 7 days
        $endDate = Carbon::now();

        $users = User::with('country')->get();
        $userRegistrations = User::select('created_at')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('Y-m-d');
            })
            ->map(function ($item) {
                return $item->count();
            });

            //////////////////          Country Graph  handler       ////////////
            $usersByCountry = User::select('country_id', DB::raw('count(*) as total'))
                ->groupBy('country_id')
                ->get();
        
            $data = [];
            foreach ($usersByCountry as $user) {
            $c = Country::select(['name'])->where('id', $user->country_id)->first();
                $data[] = [
                 // 'label' => $user->country_id,
                 'label' => $c->name,
                    'y' => $user->total,
                ];
            }



             ///////////////// Will Populate the data in YAJRA Table on document.load     //////////////////
             $users = User::query()->get();
             $countries = Country::query()->get();

        return view('welcome', compact('userRegistrations', 'data', 'users', 'countries'));
    }







    /////////////////////       from here CRUD functions starts   ///////////



                                    ////////// CREATE  ///////////////
        public function create(Request $request){
        
            $validatedData = $request->validate([
                'name'=>'required',
                'email' => 'required|unique:users,email',
                'phone'=>'required',
                'country'=> 'required',
            ]);
            
            User::create([
                    'name'=>$request->name,
                    'email'=>$request->email,
                    'password'=> \Hash::make($request->password),
                    'phone'=>$request->phone,
                    'country_id'=>$request->country,
                    'ip'=>$request->ip(),
                    'image'=>$request->input('image_url'),
                ]);
                
            $users = User::select(['id', 'name', 'email', 'phone', 'country_id'])
            ->get();

            return DataTables::of($users)->addIndexColumn()
                    ->addColumn('action', function ($user) {
                        return '
                            <button onclick="viewClicked(' . $user->id . ')" id="viewUserBtn" class="btn btn-view">View</button>
                            <button onclick="editClicked(' . $user->id . ')" id="editUserBtn" class="btn btn-edit">Edit</button>
                            <button onclick="deleteClicked(' . $user->id . ')"  id="deleteCrud" type="button" class="btn btn-delete">Delete</button>
                        ';
                    })->rawColumns(['action'])
                    ->make(true);
        }




                                         ////////// DELETE  ///////////////
        public function delete($id){
            $user = User::findOrFail($id);
            $user->delete();
            $users = User::select(['id', 'name', 'email', 'phone', 'country_id'])
            ->get();

            return DataTables::of($users)->addIndexColumn()
                    ->addColumn('action', function ($user) {
                        return '
                            <button onclick="viewClicked(' . $user->id . ')" id="viewUserBtn" class="btn btn-view">View</button>
                            <button onclick="editClicked(' . $user->id . ')" id="editUserBtn" class="btn btn-edit">Edit</button>
                            <button onclick="deleteClicked(' . $user->id . ')"  id="deleteCrud" type="button" class="btn btn-delete">Delete</button>
                        ';
                    })->rawColumns(['action'])
                    ->make(true);
        }






                                ////////////  VIEW //////////////////
        public function fetchuserdata($id){
                    $user = User::find($id);
                    $data = [
                        'name' => $user->name,
                        'email' => $user->email,
                        'phone' => $user->phone,
                        'country' => $user->country_id,  
                    ]; 
                    return response()->json($data);  
        }




                                 ////////////////    UPDATE //////////////////
        public function updateuser(Request $request, $id)
        {
            $newName = $request->input('name');
            $newEmail = $request->input('email');
            $newPhone = $request->input('phone');
            $newCountry = $request->input('country');
            
            $user = User::find($id);

            $user->name = $newName;
            $user->email = $newEmail;
            $user->phone = $newPhone;
            $user->country_id = $newCountry;
            $user->ip = $request->ip();
            $user->save();

            $users = User::select(['id', 'name', 'email', 'phone', 'country_id'])
            ->get();
    
            return DataTables::of($users)->addIndexColumn()
                    ->addColumn('action', function ($user) {
                         return '
                            <button onclick="viewClicked(' . $user->id . ')" id="viewUserBtn" class="btn btn-view">View</button>
                            <button onclick="editClicked(' . $user->id . ')" id="editUserBtn" class="btn btn-edit">Edit</button>
                            <button onclick="deleteClicked(' . $user->id . ')"  id="deleteCrud" type="button" class="btn btn-delete">Delete</button>
                        ';
                    })->rawColumns(['action'])
                    ->make(true);
        }


        

                                //////// FILTERS ON YAJRA ///////////////////
            public function applyFilter(Request $request){
            
                    if ($request->ajax()) {
                        $query = User::query();
                        
                        // COUNTRY
                        if ($request->filled('country')) {
                            $query->where('country', $request->country)->select(['id', 'name', 'email', 'phone', 'country_id']);
                        }
                            // DATE
                        if ($request->filled('startdate') && $request->filled('enddate')) {
                            $start_date= $request->startdate;
                            $end_date= $request->enddate;
                            $query->whereBetween('created_at', [$start_date, $end_date])->select(['id', 'name', 'email', 'phone', 'country_id']);
                        }

                        $users = $query->get();
                        
                        return DataTables::of($users)->addIndexColumn()
                            ->addColumn('action', function ($user) {
                                return '
                                    <button onclick="viewClicked(' . $user->id . ')" id="viewUserBtn" class="btn btn-view">View</button>
                                    <button onclick="editClicked(' . $user->id . ')" id="editUserBtn" class="btn btn-edit">Edit</button>
                                    <button onclick="deleteClicked(' . $user->id . ')"  id="deleteCrud" type="button" class="btn btn-delete">Delete</button>
                                ';
                            })->rawColumns(['action'])
                            ->make(true);
                    }
                    return view('welcome');
                }



            
                public function countryWiseDetail(Request $request){
                    $country = $request->query('country');
                    $cid = Country::select(['id'])->where('name', $country)->first();
                    
                    $users = User::select(['id', 'name', 'email', 'phone', 'country_id'])->where('country_id', $cid->id)->get();
                    $cIdToReplaceIdWithName;
                    foreach ($users as $user) {
                        $cIdToReplaceIdWithName = $user->country_id;
                    }
                    
                    $c = Country::select(['name'])->where('id', $cIdToReplaceIdWithName)->first();
                    $data = [
                        'users' => $users,
                    ];
                    if ($request->expectsJson()) {
                        return response()->json($data);
                    }
                    return view('countrywisedetail', compact('data', 'c'));
                }


               



                    /////////////////     EXCEL DATA DOWNLOAD  //////////////////
                public function export(){
                    return Excel::download(new UserExport(), 'data.xlsx');
                }


                public function emailTemplateView(){
                    return view('email.registered');
                }

                

                //$user    parameter to this mthod
                public function sendWelcomeEmail()
                {
                    // $sharukhemail = "shahrukh862001@gmail.com";
                    $sharukhemail = "shahrukh862001@gmail.com";
                    // Mail::to($user->email)->send(new WelcomeEmail($user));
                    Mail::to($sharukhemail)->send(new WelcomeEmail($sharukhemail));
                }


}
