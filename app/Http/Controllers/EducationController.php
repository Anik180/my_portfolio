<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class EducationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function education()
    {
    	$education=DB::table('education')->get();
    	return view('admin.education',compact('education'));
    }
    public function store(Request $request)
    {
    	$data=array();
    	$data['year']=$request->year;
    	$data['degree']=$request->degree;
        $data['university']=$request->university;
        $data['location']=$request->location;
    	DB::table('education')->insert($data);
    	 $notification=array(
            'messege'=>'Successfully Insert',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function delete($id)
    {
         DB::table('education')->where('id',$id)->delete();
    		 $notification=array(
            'messege'=>'Successfully delete',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
    		$edit=DB::table('education')->where('id',$id)->first();
    	    return view('admin.edit_education',compact('edit'));
    }
    public function educationupdate(Request $request,$id)
    {
    	$data=array();
    	$data['year']=$request->year;
    	$data['degree']=$request->degree;
        $data['university']=$request->university;
        $data['location']=$request->location;
      DB::table('education')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->route('education')->with($notification);
    }
}
