<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Image;
class AboutController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function Updateabout()
    {
     $about=DB::table('about')->first();	
     return view('admin.about',compact('about'));
    }

    public function Update(Request $request,$id)
    {
    
           $data=array();
           $data['about_tagline']=$request->about_tagline;
           $data['name']=$request->name;
           $data['facebook']=$request->facebook;
           $data['instagram']=$request->instagram;
           $data['linkedin']=$request->linkedin;
           $data['email']=$request->email;         
           $data['phone']=$request->phone;         
           $data['map']=$request->map;
           $data['description']=$request->description;
           $oldimage=$request->oldimage;
           $image=$request->photo;
           if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(500,300)->save('public/photo/'.$image_one);
            $data['photo']='public/photo/'.$image_one;
            DB::table('about')->where('id',$id)->update($data);
            unlink($oldimage);
         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
           }
            $data['photo']=$oldimage;
             DB::table('about')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }

    public function Updatemain()
    {
      $main=DB::table('mainabout')->first();
      return view('admin.mainabout',compact('main'));
    }

    public function main(Request $request,$id)
    {
                 $data=array();
           $data['mainabout_description']=$request->mainabout_description;
           $oldimage=$request->oldimage;
           $image=$request->photo;
           if($image){
            $image_one=uniqid().'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(1002,1026)->save('public/photo/'.$image_one);
            $data['photo']='public/photo/'.$image_one;
            DB::table('mainabout')->where('id',$id)->update($data);
            unlink($oldimage);
         $notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
           }
            $data['photo']=$oldimage;
             DB::table('mainabout')->where('id',$id)->update($data);
            
            $notification=array(
            'messege'=>'Successfully update',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
}
