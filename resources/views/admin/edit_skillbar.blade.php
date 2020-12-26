@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Skill Bar</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                 <li class="breadcrumb-item active">Skill Bar</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


     <div class="card">
            <div class="card-header">
              <h3 class="card-title">Update Skill Bar</h3>
           

            </div>
            <!-- /.card-header -->
            <div class="card-body">
                      <div class="modal-content modal-dialog" >
            <div class="modal-header">
              <h4 class="modal-title">Update Skill Bar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="post" action="{{route('up.skillBar',$edit->id)}}">
                    @csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Skill Title</label>
                      
                    <input type="text"  class="form-control" value="{{$edit->skill_title}}" name="skill_title"  required="">
                  </div>
                        <div class="form-group">
                    <label >Skill Percent</label>
                  
                    <input type=""  class="form-control" value="{{$edit->skill_percent}}" name="skill_percent"  required>
                  </div>   
                              <div class="form-group">
                    <label >Skill Background</label>
                  
                    <input type=""  class="form-control" value="{{$edit->skill_background}}" name="skill_background"  required>
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