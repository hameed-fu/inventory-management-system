@extends('backend.layouts.master')

@section('content')
    <!-- Main Sidebar Container -->


    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Update Category</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container"> 
            
               
            
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Category</h3>
                </div>

                <div class="card-body">


                        <div class="row">
                            <div class="col-sm-12">
                                <form action="{{ route('categories.update') }}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label for="">Name</label>
                                        <input class="form-control" type="text" name="name" value="{{ $category->name }}">
                                        <input type="hidden" name="id" value="{{ $category->id }}">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </form>
                            </div>
                        </div>


                </div>

            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
