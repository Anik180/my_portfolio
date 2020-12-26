@extends('layouts.app')

@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>    
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Work Update</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active"><a href="{{route('my.work')}}">Work</a></li>
                 <li class="breadcrumb-item active">Work Update</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>




   <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-lg-8 offset-lg-2">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Work</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" action="{{route('udate.work',$edit->id)}}"  method="post" enctype="multipart/form-data">          
                @csrf
                <div class="card-body">
                  <div class="row">
                  <div class="form-group col-md-6">
                    <label >Project Title</label>
                    <input type="text" class="form-control" id="project_title" name="project_title" value="{{$edit->project_title}}">
                  </div>
                  <div class="form-group col-md-6">
                    <label>Detail</label>
                    <input type="text" class="form-control" id="detail" name="detail" value="{{$edit->detail}}">
                  </div>
                </div>
              <div class="row">
                  <div class="form-group col-md-6">
                    <label >Description</label>
                     <textarea class="form-control" name="description">{{$edit->description}}</textarea>
                  </div>
                   <div class="form-group col-md-6">
                    <label>Language</label>
                    <input type="text" class="form-control" id="Language" name="Language" value="{{$edit->Language}}">
                  </div>
                 </div>
           <div class="row">
                <div class="form-group col-md-6">
                    <label>Website Link</label>
                    <input type="text" class="form-control" id="website_link" name="website_link" value="{{$edit->website_link}}">
                  </div>
               <div class="form-group col-md-6">
                    <label>Github Link</label>
                    <input type="text" class="form-control" id="github_link" name="github_link" value="{{$edit->github_link}}">
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
                      <div class="col-lg-6">
                    <label for="exampleInputFile">Old Image</label><br>
                    <img src="{{URL::to($edit->main_photo)}}" style="height: 40px;width: 70px;">
                    <input type="hidden" name="mainoldimage" value="{{$edit->main_photo}}">
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
                       <div class="col-lg-6">
                    <label for="exampleInputFile">Old Image</label><br>
                    <img src="{{URL::to($edit->photo_one)}}" style="height: 40px;width: 70px;">
                    <input type="hidden" name="mainoldimage" value="{{$edit->photo_one}}">
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
                       <div class="col-lg-6">
                    <label for="exampleInputFile">Old Image</label><br>
                    <img src="{{URL::to($edit->photo_two)}}" style="height: 40px;width: 70px;">
                    <input type="hidden" name="oldimagetwo" value="{{$edit->photo_two}}">
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
                       <div class="col-lg-6">
                    <label for="exampleInputFile">Old Image</label><br>
                    <img src="{{URL::to($edit->photo_three)}}" style="height: 40px;width: 70px;">
                    <input type="hidden" name="oldimagethree" value="{{$edit->photo_three}}">
                  </div>
                      <hr>
                      <h4 class="text-center">Extra Option</h4>
               <div class="row">
                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="webdesign" name="webdesign" value="1"  <?php if($edit->webdesign==1){echo "checked";}?>>
                    <label class="form-check-label" for="exampleCheck1">Web Design</label>
                  </div>
                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="laravel" name="laravel" value="1" <?php if($edit->laravel==1){echo "checked";}?>>
                    <label class="form-check-label" for="exampleCheck1">Laravel</label>
                  </div>

                  <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="php" name="php" value="1" <?php if($edit->php==1){echo "checked";}?>>
                    <label class="form-check-label" for="exampleCheck1">Php</label>
                  </div>
                     <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="vuejs" name="vuejs" value="1" <?php if($edit->vuejs==1){echo "checked";}?>>
                    <label class="form-check-label" for="vuejs">vue.js</label>
                  </div>
                     <div class="form-check col-md-6">
                    <input type="checkbox" class="form-check-input" id="wordpress" name="wordpress" value="1" <?php if($edit->wordpress==1){echo "checked";}?>>
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
      </div>
    </section>
    @endsection