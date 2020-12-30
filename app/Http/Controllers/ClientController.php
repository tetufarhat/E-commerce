<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ClientController extends Controller
{
    public function Register(){
    	return view('front.register');
    }
    public function insertRegister(Request $request){
    	$image 					=$request->file('client_image');
   		$imageName 				=$image->getClientOriginalName();
   		$dirctory 				='./gallry/client-image/';
   		$image->move($dirctory,$imageName);
   		$client_image 			=$dirctory.$imageName;

    	$client = New User();
    	$client->client_name 		= $request->client_name;
    	$client->client_email 		= $request->client_email;
    	$client->client_company_name= $request->client_company_name;
    	$client->client_image 		= $client_image;
    	$client->save();
    	return redirect()->back();
    }
}
