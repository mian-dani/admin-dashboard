<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use DataTables;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Country;


class UserController extends Controller
{

    public function yajraInitialize(Request $request){
        if ($request->ajax()) {
            $query = User::query();
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

    public function dashboard(){
        //Daily user registration
        $startDate = Carbon::now()->subDays(30); // Retrieve data for the last 7 days
        $endDate = Carbon::now();

        $userRegistrations = User::select('created_at')
            ->whereBetween('created_at', [$startDate, $endDate])
            ->get()
            ->groupBy(function ($item) {
                return $item->created_at->format('Y-m-d');
            })
            ->map(function ($item) {
                return $item->count();
            });

            //country graph data 
            $usersByCountry = User::select('country_id', DB::raw('count(*) as total'))
                ->groupBy('country_id')
                ->get();
        
            // Prepare the data in the required format for the graph
            $data = [];
            foreach ($usersByCountry as $user) {
            $c = Country::select(['name'])->where('id', $user->country_id)->first();
                $data[] = [
                //  'label' => $user->country_id,
                'label' => $c->name,
                    'y' => $user->total,
                ];
            }
             

             // crud functions view 
             $users = User::query()->get();
             $countries = Country::query()->get();

            
        return view('welcome', compact('userRegistrations', 'data', 'users', 'countries'));
    }

        public function create(Request $request){
        
            // Validate the incoming request data
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


         // this method is deleting user from Yajra table
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

        // Fetch Users data to populate in popup for view or Edit Operation
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

            // Update User Record
        public function updateuser(Request $request, $id)
        {
            $newName = $request->input('name');
            $newEmail = $request->input('email');
            $newPhone = $request->input('phone');
            $newCountry = $request->input('country');
            
            // Find the user by ID
            $user = User::find($id);

            // Update the user data
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



}
