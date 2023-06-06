<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class CountryWiseUsersController extends Controller
{
    //////////   THIS CONTROLLER IS HANDELING REQUESTS COMING FROM COUNTRY WISE YAJRA TABLE /////////////
    //////////   AFTER CLICKING ON GRAPH NEW VIEW OPENS  /////////////
    
    public function countryWiseUsers(Request $request){
       
        $countryName = $request->query('country');
        
        $users = User::whereHas('country', function ($query) use ($countryName) {
            $query->where('name', $countryName);
        })->get();
        
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                
                'name' => $user->name,
                'email' => $user->email,
                'phone' => $user->phone,
                'country' => $user->country->name,
            ];
        }
        
        // Return the data as JSON response
        return response()->json(['data' => $data]);
    }

}
