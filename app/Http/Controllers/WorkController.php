<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class WorkController extends Controller
{
       public function __construct()
    {
        $this->middleware('auth');
    }

    public function mywork()
    {
    	$work=DB::table('works')->get();
    	return view('admin.work',compact('work'));
    }
    public function store(Request $request)
    {
    	 $validatedData = $request->validate([
        'project_title' => 'required',
        'description' => 'required',
     ]);

     	   $data=array();
     	   $data['project_title']=$request->project_title;
     	   $data['detail']=$request->detail;
     	   $data['description']=$request->description;
     	   $data['Language']=$request->Language;
     	   $data['website_link']=$request->website_link;
     	   $data['github_link']=$request->github_link;
     	   $data['webdesign']=$request->webdesign;
     	   $data['laravel']=$request->laravel;
     	   $data['php']=$request->php;
     	   $data['vuejs']=$request->vuejs;
     	   $data['wordpress']=$request->wordpress;
     	   $image=$request->main_photo;
     	   $imageone=$request->photo_one;
     	   $imagetwo=$request->photo_two;
     	   $imagethree=$request->photo_three;
     	   if($image && $imageone && $imagetwo && $imagethree){
     	   	$main_photo=uniqid().'.'.$image->getClientOriginalExtension();
     	   	$image_one=uniqid().'.'.$imageone->getClientOriginalExtension();
     	   	$image_two=uniqid().'.'.$imagetwo->getClientOriginalExtension();
     	   	$image_three=uniqid().'.'.$imagethree->getClientOriginalExtension();
     	   	Image::make($image)->resize(1700,700)->save('public/work/'.$main_photo);
     	   	Image::make($imageone)->resize(1700,700)->save('public/work/'.$image_one);
     	   	Image::make($imagetwo)->resize(1700,700)->save('public/work/'.$image_two);
     	   	Image::make($imagethree)->resize(1700,700)->save('public/work/'.$image_three);
     	   	$data['main_photo']='public/work/'.$main_photo;
     	   	$data['photo_one']='public/work/'.$image_one;
     	   	$data['photo_two']='public/work/'.$image_two;
     	   	$data['photo_three']='public/work/'.$image_three;
     	   	DB::table('works')->insert($data);
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
   $work=DB::table("works")->where('id',$id)->first();
    unlink($work->main_photo);
    unlink($work->photo_one);
    unlink($work->photo_two);
    unlink($work->photo_three);
    DB::table("works")->where('id',$id)->delete();
     $notification=array(
          'messege'=>'Successfully Delete',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
    	$edit=DB::table('works')->where('id',$id)->first();
    	return view('admin.edit_work',compact('edit'));
    }

    public function update(Request $request,$id)
    {
    	 $validatedData = $request->validate([
        'project_title' => 'required',
        'description' => 'required',
     ]);

           $data=array();
     	   $data['project_title']=$request->project_title;
     	   $data['detail']=$request->detail;
     	   $data['description']=$request->description;
     	   $data['Language']=$request->Language;
     	   $data['website_link']=$request->website_link;
     	   $data['github_link']=$request->github_link;
     	   $data['webdesign']=$request->webdesign;
     	   $data['laravel']=$request->laravel;
     	   $data['php']=$request->php;
     	   $data['vuejs']=$request->vuejs;
     	   $data['wordpress']=$request->wordpress;
         
           $mainoldimage=$request->main_photo;
           $oldimageone=$request->photo_one;
           $oldimagetwo=$request->photo_two;
           $oldimagethree=$request->photo_three;
           $image=$request->main_photo;
           $imageone=$request->photo_one;
     	   $imagetwo=$request->photo_two;
     	   $imagethree=$request->photo_three;
           if($image && $imageone && $imagetwo && $imagethree){
            $main_photo=uniqid().'.'.$image->getClientOriginalExtension();
     	   	$image_one=uniqid().'.'.$imageone->getClientOriginalExtension();
     	   	$image_two=uniqid().'.'.$imagetwo->getClientOriginalExtension();
     	   	$image_three=uniqid().'.'.$imagethree->getClientOriginalExtension();
            Image::make($image)->resize(1700,700)->save('public/work/'.$main_photo);
     	   	Image::make($imageone)->resize(1700,700)->save('public/work/'.$image_one);
     	   	Image::make($imagetwo)->resize(1700,700)->save('public/work/'.$image_two);
     	   	Image::make($imagethree)->resize(1700,700)->save('public/work/'.$image_three);
            $data['main_photo']='public/work/'.$main_photo;
     	   	$data['photo_one']='public/work/'.$image_one;
     	   	$data['photo_two']='public/work/'.$image_two;
     	   	$data['photo_three']='public/work/'.$image_three;
            DB::table('works')->where('id',$id)->update($data);
            unlink($mainoldimage);
            unlink($oldimageone);
            unlink($oldimagetwo);
            unlink($oldimagethree);
         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->route('my.work')->with($notification);
           }
            $data['image']=$mainoldimage;
            $data['imageone']=$oldimageone;
            $data['imagetwo']=$oldimagetwo;
            $data['imagethree']=$oldimagethree;
             DB::table('works')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->route('my.work')->with($notification);
    }
}
