@extends('backend.layouts.master')
@section('content')


<!-- Main Body -->
<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">



    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->


    <!-- ============================================================= -->
    <!-- S C R I P T    S T A R T S     H E R E  -->
    <!-- ============================================================= -->


    <div class="row">
        <div class="page-header col-lg-12 ">
            <center>
                <h3>Edit Supplier</h3>
            </center>
        </div>
    </div>
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- /.row -->
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                       <section class="col-lg-12 ">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3>Add Product
                                <a class="btn btn-success float-right " href="{{route('products.view')}}"><i class="fa fa-plus">Product List</i></a>
                            </h3>
                        </div><!-- /.card-header -->
                        <div class="card-body">
                            <form method="post" action="{{route('products.update',$editData->id)}}" id="myForm" enctype="multipart/form-data">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                     <label for="supplier_id">Supplier Name</label>
                                     <select name="supplier_id" id="" class="form-control">
                                         <option value="">Select Supplier</option>
                                         @foreach($suppliers as $supplier)
                                         <option value="{{$supplier->id}}" {{($editData->supplier_id==$supplier->id)?"selected":''}}>{{$supplier->name}}</option>
                                         @endforeach
                                     </select>
                                    
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="category_id">Category Name</label>
                                     <select name="category_id" id="" class="form-control">
                                         <option value="">Select Category</option>
                                         @foreach($categories as $category)
                                         <option value="{{$category->id}}" {{($editData->category_id==$category->id)?"selected":''}}>{{$category->name}}</option>
                                         @endforeach
                                     </select>
                                    
                                    </div>

                                    <div class="form-group col-md-6">
                                     <label for="name">Product Name</label>
                                     <input type="text" name="name" value="{{$editData->name}}" class="form-control" id="name">
                                     
                                    </div>
                                    <div class="form-group col-md-6">
                                     <label for="unit_id">Unit</label>
                                    <select name="unit_id" id="" class="form-control">
                                         <option value="">Select Unit</option>
                                         @foreach($units as $unit)
                                         <option value="{{$unit->id}}" {{($editData->unit_id==$unit->id)?"selected":''}}>{{$unit->name}}</option>
                                         @endforeach
                                     </select>
                                     
                                    </div>

                                    <div class="form-group col-md-6">
                                     <label for="quantity">Quantity</label>
                                     <input type="quantity" name="quantity" value="{{$editData->quantity}}" class="form-control" id="quantity">
                                     <font style="color:red">{{($errors->has('quantity'))?($errors->first('quantity')):''}}</font>
                                    </div>
                                   
                                    <div class="form-group col-md-4">
                                     <label for="image">Image</label>
                                     <input type="file" name="image" value="{{$editData->image}}" class="form-control" id="image">
                                     
                                    </div>
                                    
                                    <div class="form-group col-md-2">
                                     <img id="showImage"  src="{{(!empty($editData->image))?url('public/upload/product_images/'.$editData->image):url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;" >
                                    </div>
                                    
                                    <div class="form-group col-md-2" >

                                        <input type="submit" value="Update" class="btn btn-primary">
                                    </div>

                                </div>
                            </form>
                        </div><!-- /.card-body -->
                    </div>
                </section>


                    <!-- right col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->



    @include('backend.layouts.footer')

</div><!-- .main -->
<!-- End Main Body -->

@endsection
