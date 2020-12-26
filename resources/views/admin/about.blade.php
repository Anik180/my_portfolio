@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">About</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">About</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update About</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Update About</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{route('update.now',$about->id)}}"  method="post" enctype="multipart/form-data">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >About Tagline</label>
                      
                    <input type="text"  class="form-control" value="{{$about->about_tagline}}" name="about_tagline"  required="">
                  </div>
                  <div class="form-group">
                    <label >Name</label>
                  
                    <input type="text" class="form-control" value="{{$about->name}}" name="name"  required="">
                  </div>
                   <div class="form-group">
                    <label >Facebook</label>
                  
                    <input type="text" class="form-control" value="{{$about->facebook}}" name="facebook"  required="">
                  </div>
                   <div class="form-group">
                    <label >Instagram</label>
                  
                    <input type="text"  class="form-control" value="{{$about->instagram}}" name="instagram"  required="">
                  </div>
                   <div class="form-group">
                    <label >Linkedin</label>
                  
                    <input type="text"  class="form-control" value="{{$about->linkedin}}" name="linkedin"  required="">
                  </div>
                    <div class="form-group">
                    <label >Email</label>
                  
                    <input type="text" class="form-control" value="{{$about->email}}" name="email"  required="">
                  </div>
                     <div class="form-group">
                    <label >Phone</label>
                  
                    <input type="text" class="form-control" value="{{$about->phone}}" name="phone"  required="">
                  </div>
                    <div class="form-group">
                    <label >Map</label>
                    <textarea class="form-control" value="" name="map"  required="">{{$about->map}}</textarea>
                  </div>
                   
                         <div class="form-group ">
                    <label for="exampleInputFile">File input</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="photo" >
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="">
                    <label for="exampleInputFile">Old Image</label><br>
                    <img src="{{URL::to($about->photo)}}" style="height: 40px;width: 70px;">
                    <input type="hidden" name="oldimage" value="{{$about->photo}}" >
                  </div>
                  
                    <div class="form-group">
                    <label >Description</label>
                  
                    <textarea class="form-control" value="" name="description"  required="">{{$about->description}}</textarea>
                  </div>                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Save</button>
                </div>
              </form>
            </div>
           
          </div>
            </div>
            <!-- /.card-body -->
          </div>



   
    @endsection