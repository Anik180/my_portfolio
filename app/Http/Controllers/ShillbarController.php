<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ShillbarController extends Controller
{
    	public function __construct()
    {
        $this->middleware('auth');
    }


    public function skillbar()
    {
    	$skillbar=DB::table('skillbars')->get();
    	return view('admin.bar',compact('skillbar'));
    }
    public function store(Request $request)
    {
    	$data=array();
    	$data['skill_title']=$request->skill_title;
    	$data['skill_percent']=$request->skill_percent;
      $data['skill_background']=$request->skill_background;
    	DB::table('skillbars')->insert($data);
    	 $notification=array(
            'messege'=>'Successfully Insert',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function delete($id)
    {
    	DB::table('skillbars')->where('id',$id)->delete();
    		 $notification=array(
            'messege'=>'Successfully delete',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);

    }
    public function edit($id)
    {
    	$edit=DB::table('skillbars')->where('id',$id)->first();
    	return view('admin.edit_skillbar',compact('edit'));
    }
    public function skillupdate(Request $request,$id)
    {
      $data=array();
      $data['skill_title']=$request->skill_title;
      $data['skill_percent']=$request->skill_percent;
      $data['skill_background']=$request->skill_background;
      DB::table('skillbars')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->route('skill.bar')->with($notification);
    	    }
}
