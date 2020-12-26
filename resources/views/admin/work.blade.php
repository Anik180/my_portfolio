@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">My Work</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">My Work</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- datatable -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All My Work</h3>
               <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;">
                    <i class="fas fa-plus-circle"></i>Add New
                  </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Project Title</th>
                  <th>Description</th>
                  <th>Language</th>
                  <th>Main Photo</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($work as $row)
                <tr>
                  <td>{{$row->project_title}}</td>
                  <td>{{$row->description}}</td>
                  <td>{{$row->Language}}</td>
                  <td><img src="{{URL::to($row->main_photo)}}" style="height: 80px; width: 80px;"></td>
                  <td><a href="{{route('edit.work',$row->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  <a href="{{route('delete.work',$row->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                 <th>Project Title</th>
                  <th>Description</th>
                  <th>Language</th>
                  <th>Main Photo</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.card-body -->
          </div>



          <!-- modal -->
              <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Add New Work</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">

              <!-- form start -->
              <form role="form" action="{{route('store.work')}}"  method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label >Project Title</label>
                    <input type="text" class="form-control" id="project_title" name="project_title" placeholder="Enter Project Title">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Detail</label>
                    <input type="text" class="form-control" id="detail" name="detail" placeholder="Enter Detail">
                  </div>
                </div>

              <div class="row">
         
                  <div class="form-group col-md-6">
                    <label >Description</label>
                     <textarea  placeholder="Place some text here" name="description"></textarea>
                  
                  </div>
                   <div class="form-group col-md-6">
                    <label>Language</label>
                    <input type="text" class="form-control" id="Language" name="Language" placeholder="Enter Language">
                  </div>
                 </div>
           <div class="row">
                <div class="form-group col-md-6">
                    <label>Website Link</label>
                    <input type="text" class="form-control" id="website_link" name="website_link" placeholder="Enter Website Link">
                  </div>
               <div class="form-group col-md-6">
                    <label>Github Link</label>
                    <input type="text" class="form-control" id="github_link" name="github_link" placeholder="Enter Github Link">
                  </div>
               </div>

                  <div class="form-group">
                    <label for="exampleInputFile">Main Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="main_photo" name="main_photo" required="">
                        <label class="custom-file-label" for="main_photo">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                    <div class="form-group">
                    <label for="exampleInputFile">Photo One</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo_one" name="photo_one" required="">
                        <label class="custom-file-label" for="photo_one">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                      <div class="form-group">
                    <label for="exampleInputFile">Photo Two</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo_two" name="photo_two" required="">
                        <label class="custom-file-label" for="photo_two">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                      <div class="form-group">
                    <label for="exampleInputFile">Photo Three</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="photo_three" name="photo_three" required="">
                        <label class="custom-file-label" for="photo_three">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                      <hr>
                      <h4 class="text-center">Extra Option</h4>

               <div class="row">
                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="webdesign" name="webdesign" value="1">
                    <label class="form-check-label" for="exampleCheck1">Web Design</label>
                  </div>
                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="laravel" name="laravel" value="1">
                    <label class="form-check-label" for="exampleCheck1">Laravel</label>
                  </div>

                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="php" name="php" value="1">
                    <label class="form-check-label" for="exampleCheck1">Php</label>
                  </div>
                     <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="vuejs" name="vuejs" value="1">
                    <label class="form-check-label" for="vuejs">vue.js</label>
                  </div>
                     <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="wordpress" name="wordpress" value="1">
                    <label class="form-check-label" for="wordpress">Wordpress</label>
                  </div>
                </div>
                <!-- /.card-body -->
<br><br>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    @endsection