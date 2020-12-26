<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ContactController extends Controller
{
    public function store(Request $request)
    { 
        $validatedData = $request->validate([
        'PHONE' => 'required|unique:contacts|max:13',
        'MESSAGE' => 'required',
    ]);
          $data=array();
    	$data['FIRST_NAME']=$request->FIRST_NAME;
    	$data['LAST_NAME']=$request->LAST_NAME;
        $data['EMAIL']=$request->EMAIL;
        $data['PHONE']=$request->PHONE;
        $data['MESSAGE']=$request->MESSAGE;
    	DB::table('contacts')->insert($data);
        $notification=array(
            'messege'=>'Successfully Insert',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);

    		}


}
