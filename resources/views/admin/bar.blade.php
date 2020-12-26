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


    <!-- datatable -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">All Skill Bar</h3>
               <button type="button" class="btn btn-danger float-right" data-toggle="modal" data-target="#modal-default" style="margin-right: 5px;">
                    <i class="fas fa-plus-circle"></i>Add New
                  </button>

            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Skill Title</th>
                  <th>Skill Percent</th>
                  <th>Skill Background</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>
                	@foreach($skillbar as $row)
                <tr>
                  <td>{{$row->skill_title}}</td>
                  <td>{{$row->skill_percent}}</td>
                  <td>{{$row->skill_background}}</td>
                  <td><a href="{{route('edit.bar',$row->id)}}" class="btn btn-info"><i class="far fa-edit"></i></a>
                  <a href="{{route('delete.bar',$row->id)}}" class="btn btn-danger" id="delete"><i class="fas fa-trash-alt"></i></a> 
                  </td>
                </tr>
               @endforeach
                </tbody>
                <tfoot>
                <tr>
                  <th>Skill Title</th>
                  <th>Skill Percent</th>
                  <th>Skill Background</th>
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
              <h4 class="modal-title">Add New Skill Bar</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                  <form method="POST" action="{{ route('store.skillbar')}}">
                  	@csrf
                <div class="card-body">
                  <div class="form-group">
                    <label >Skill Title</label>
                      @error('skill_title')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="skill_title" class="form-control @error('category_en') is-invalid @enderror"  value="{{ old('skill_title') }}" required id="English" placeholder="Enter Skill Title">
                  </div>
                  <div class="form-group">
                    <label >Skill Percent</label>
                      @error('skill_percent')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="skill_percent" class="form-control  @error('skill_percent') is-invalid @enderror"  value="{{ old('skill_percent') }}" required id="Bangla" placeholder="Enter Category Name Bangla">
                  </div>
                      <div class="form-group">
                    <label >Skill Background</label>
                      @error('skill_background')
                        <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    <input type="text" name="skill_background" class="form-control  @error('skill_percent') is-invalid @enderror"  value="{{ old('skill_background') }}" id="Bangla" placeholder="Enter Skill Background">
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