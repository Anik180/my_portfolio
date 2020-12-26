@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Education</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">Edit Education</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update Education</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Update Education</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="{{route('up.education',$edit->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Year</label>
                      
                    <input type="text"  class="form-control" value="{{$edit->year}}" name="year"  required="">
                  </div>
                        <div class="form-group">
                    <label >Degree</label>
                  
                    <input type="text"  class="form-control" value="{{$edit->degree}}" name="degree"  required>
                  </div>   
                              <div class="form-group">
                    <label >University</label>
                  
                    <input type="text"  class="form-control" value="{{$edit->university}}" name="university"  required>
                  </div>  
                               <div class="form-group">
                    <label >Location</label>
                  
                    <input type="text"  class="form-control" value="{{$edit->location}}" name="location"  required>
                  </div>       
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Update</button>
                </div>
              </form>
            </div>
           
          </div>
            </div>
            <!-- /.card-body -->
          </div>



   
    @endsection