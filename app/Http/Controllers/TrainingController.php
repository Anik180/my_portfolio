<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\File;
class TrainingController extends Controller
{
     public function __construct()
    {
        $this->middleware('auth');
    }

    public function training()
    {
      $training=DB::table('training')->get();
    	return view('admin.training',compact('training'));
    }

    public function store(Request $request)
    {
    	$data=array();
    	$data['year']=$request->year;
    	$data['degree']=$request->degree;
        $data['university']=$request->university;
        $data['location']=$request->location;
    	DB::table('training')->insert($data);
    	 $notification=array(
            'messege'=>'Successfully Insert',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function delete($id)
    {
    	DB::table('training')->where('id',$id)->delete();
    		 $notification=array(
            'messege'=>'Successfully delete',
            'alert-type'=>'success'
             );
            return Redirect()->back()->with($notification);
    }
    public function edit($id)
    {
    	  $edit=DB::table('training')->where('id',$id)->first();
    	    return view('admin.edit_training',compact('edit'));
    }
   public function trainingupdate(Request $request,$id)
   {
   	$data=array();
    	$data['year']=$request->year;
    	$data['degree']=$request->degree;
        $data['university']=$request->university;
        $data['location']=$request->location;
      DB::table('training')->where('id',$id)->update($data);
$notification=array(
          'messege'=>'Successfully update',
           'alert-type'=>'success'
             );
   return Redirect()->route('training')->with($notification);
   }

   public function cv()
   {
    $cv=DB::table('files')->get();
    return view('admin.cv',compact('cv'));
   }
   public function cvstore(Request $request)
   {
     $data=New File;
     if($request->file('cv')){
      $file=$request->file('cv');
      $filename=time().'.'.$file->getClientOriginalExtension();
      $request->cv->move('work/',$filename);

      $data->cv=  $filename;
     }
     $data->save();
     return redirect()->back();
   }

   public function cvdownload($cv)
   {
    // return response()->download('work/'.$cv);
   }
}
