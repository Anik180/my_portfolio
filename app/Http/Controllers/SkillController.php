<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class SkillController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function skill()
    {
    	$all=DB::table('skills')->get();
    	return view('admin.skill',compact('all'));
    }
    public function skillstore(Request $request)

    {
   
     	   $data=array();
     	   $data['title']=$request->title;
     	   $data['description']=$request->description;
     	   $image=$request->photo;
     	   if($image){
     	   	$image_one=uniqid().'.'.$image->getClientOriginalExtension();
     	   	Image::make($image)->resize(5100,3400)->save('public/photo/'.$image_one);
     	   	$data['photo']='public/photo/'.$image_one;
     	   	DB::table('skills')->insert($data);
     	 $notification=array(
          'messege'=>'Successfully Added',
           'alert-type'=>'success'
             );
     	   	return Redirect()->back()->with($notification);
     	   }else{
     	   	return Redirect()->back();
     	   }
    }

public function delete($id)
{
	    $skill=DB::table("skills")->where('id',$id)->first();
        unlink($skill->photo);
        DB::table("skills")->where('id',$id)->delete();
        $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
}

public function edit($id)
{
	$edit=DB::table('skills')->first();
	return view('admin.edit_skill',compact('edit'));
}
public function update(Request $request,$id)
{

    	   $data=array();
     	   $data['title']=$request->title;
     	   $data['description']=$request->description;
           $oldimage=$request->oldimage;
           $image=$request->photo;
           if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(5100,3400)->save('public/photo/'.$image_one);
            $data['photo']='public/photo/'.$image_one;
            DB::table('skills')->where('id',$id)->update($data);
            unlink($oldimage);
         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->route('skill')->with($notification);
           }
            $data['photo']=$oldimage;
             DB::table('skills')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->route('skill')->with($notification);
}

}
