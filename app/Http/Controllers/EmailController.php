<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\SendEmailJob;
use Illuminate\Support\Facades\View;


class EmailController extends Controller
{

    public function sendEmails()
    {
        $emailTemplate = View::make('email.statictemplate')->render();
        dispatch(new SendEmailJob($emailTemplate));
    }


    public function collectUserData(Request $request){

        $role = $request->input('role');
        $field = $request->input('field');
        $fname = $request->input('fname');
        $lname = $request->input('lname');
        $address = $request->input('address');
        $city = $request->input('city');
        $region = $request->input('region');
        $zipcode = $request->input('zipcode');
        $country = $request->input('country');
        


        return view('email.registered', compact('role', 'field', 'fname','lname', 'address', 'city','region', 'zipcode', 'country'));


        // Mail::to($sharukhemail)->send(new WelcomeEmail($sharukhemail));
    }



    

    
}
