@extends('layouts.app')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Training</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
              <li class="breadcrumb-item active">Training</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>


    <!-- datatable -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Training</h3>
               <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;">
                    <i class="fas fa-plus-circle"></i>Add New
                  </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Year</th>
                  <th>Degree</th>
                  <th>University</th>
                  <th>Location</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($training as $row)
                <tr>
                  <td>{{$row->year}}</td>
                  <td>{{$row->degree}}</td>
                  <td>{{$row->university}}</td>
                  <td>{{$row->location}}</td>
                  <td><a href="{{route('edit.training',$row->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  <a href="{{route('delete.training',$row->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Year</th>
                  <th>Degree</th>
                  <th>University</th>
                  <th>Location</th>
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
              <h4 class="modal-title">Add Training</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{ route('store.training')}}">
                  	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Year</label>
                      @error('year')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="year" class="form-control @error('year') is-invalid @enderror"  value="{{ old('year') }}" required id="Year" placeholder="Enter Year">
                  </div>
                  <div class="form-group">
                    <label >Degree</label>
                      @error('degree')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="degree" class="form-control  @error('degree') is-invalid @enderror"  value="{{ old('degree') }}" required id="degree" placeholder="Enter Degree">
                  </div>
                      <div class="form-group">
                    <label >University</label>
                      @error('university')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="university" class="form-control  @error('university') is-invalid @enderror"  value="{{ old('university') }}" required id="Bangla" placeholder="Enter University">
                  </div>
                       <div class="form-group">
                    <label >Location</label>
                      @error('location')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="location" class="form-control  @error('location') is-invalid @enderror"  value="{{ old('location') }}" required id="location" placeholder="Enter location">
                  </div>
                  <div class="form-group mb-0">
               
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
           
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
    @endsection