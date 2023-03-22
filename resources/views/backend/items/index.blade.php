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
                        <h1 class="m-0 text-dark">items</h1>
                    </div><!-- /.col -->

                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>

        <div class="container">

            <!-- Button trigger modal -->
 
  
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add New Category</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('items.add') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="">Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Name">
                                </div> 
                                <div class="form-group"> 
                                <label for="">Quantity</label> 
                                <input type="number" class="form-control" name="Quantity" placeholder="Quantity">
                                </div>
                                <div class="form-group">
                                <label for="">Purchase price</label>
                                <input type="number" class="form-control" name="purchase_price" placeholder="Purchase_price">
                                </div>
                                <div class="class-form">
                                <label for="">Sale Price</label>
                                <input type="number" class="form-control" name="sale_price" placeholder="Sale_Price">
                                </div>
                                <div class="form-group">
                                <label for="">category ID</label>
                                <input type="number" class="form-control" name="category_id" placeholder="categegy_ID">
                                </div>
                                <div class="form-group">
                                <label for="">Description</label>
                                <input type="text" class="form-control" name="description" placeholder="Description">
                                </div>
                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Save changes</button>
                        </form>
                    </div>
                </div>
                </div>
            </div>

            <button class="btn btn-primary mb-1" data-toggle="modal" data-target="#exampleModal">Add New</button>
            
            <div>
              
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif

                @if(session()->has('error'))
                <div class="alert alert-danger">
                    {{ session()->get('error') }}
                </div>
            @endif
               
            </div>
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">All Items</h3>
                </div>

                <div class="card-body">


                        <div class="row">
                            <div class="col-sm-12">
                                <table id="example1" class="table table-bordered table-striped"
                                    aria-describedby=" ">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Name</th>
                                            <th>item</th>
                                            <th>Quantity</th>
                                            <th>Purchase price</th>
                                            <th>Sale Price</th>
                                            <th>Description</th>

                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    @foreach ($items as $key => $item)
                                        <tr>
                                            <td>{{ $key + 1 }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->Quantity }}</td>
                                            <td>{{ $item->purchase_price }}</td>
                                            <td>{{$item->sale_price }}</td>
                                            <td>{{ $item->category_id  }}</td>
                                            <td>{{ $item->Description}}</td>
                                            <td>
                                                <a class="btn btn-sm btn-warning" href="{{ route('items.edit',$items->id) }}">Edit</a>
                                                <a onclick="return confirm('are you sure?')" class="btn btn-sm btn-danger" href="{{ route('items.delete',$item->id) }}">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                      
                                     
                                </table>
                            </div>
                        </div>


                </div>

            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
@endsection
