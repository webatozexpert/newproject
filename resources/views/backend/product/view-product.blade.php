@extends('backend.layouts.master')
@section('content')

<style type="text/css" class="init">
    /* Ensure that the demo table scrolls */
    th,
    td {
        white-space: nowrap;
    }

    div.dataTables_wrapper {
        margin: 0 auto;
    }

</style>
<!-- Main Body -->
<div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">



    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->



    <!-- ============================================================= -->
    <!-- S C R I P T    S T A R T S     H E R E  -->
    <!-- ============================================================= -->
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
    <!-- ============================================================= -->
    <!-- S C R I P T              E N D S             H E R E          -->
    <!-- ============================================================= -->

    <div class="row">
        <div class="page-header col-lg-12 ">
            <center>
                <h3>Product List</h3>
            </center>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-12 col-md-12 col-xs-12">
            <div class="col-lg-6 entry_panel_body ">
                <a href="{{route('products.add')}}"><input type="button" value="+ Add Product" class="col-lg-offset-9 col-lg-3 col-md-offset-9 col-md-3 col-sm-offset-9 col-sm-3 col-xs-offset-7 col-xs-3 btn btn-sm button btn-primary pull-left" style="font-size: 12px; font-weight: bold;"></a>

            </div>
        </div>
    </div>

    <br><br>

    <!---Data Table-->
    <div class="row">
        <div class="col-lg-12 datatablescope ">
            <table id="example1" name="example1" class="stripe row-border order-column" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th style="width:5%;">Sl.No</th>
                        <th style="width:15%;">Supplier Name</th>
                        <th style="width:15%;">Category</th>
                        <th style="width:15%;">Name</th>
                        <th style="width:15%;">Unit</th>
                        <th style="width:15%;">Quantity</th>
                        <th style="width:15%;">Prepared By</th>
                        <th style="width:15%;">Logo</th>
                        <th style="width:10%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($allData as $key => $product)
                                        <tr>
                                            <td>{{ $key+1}}</td>
                                            <td>{{$product['supplier']['name']}}</td>
                                             <td>{{$product['category']['name']}}</td>
                                            <td>{{ $product->name}}</td>
                                           <td>{{$product['unit']['name']}}</td>
                                            <td>{{ $product->quantity}}</td>
                                            <td>{{ Auth::user()->name }}</td>
                                            <td><img src="{{(!empty($product->image))?url('public/upload/product_images/'.$product->image):url('public/upload/no_imgae .png')}}" width="60px" height="65px;" ></td>
                                            <td>
                                            <a  class="btn btn-primary btn-sm" href="{{route('products.edit',$product->id)}}"><i class="fa fa-edit" title="Edit">Edit</i> </a>
                                            <a id="delete" class="btn btn-danger btn-sm" href="{{route('products.delete',$product->id)}}"><i class="fa fa-trash" title="Delete">Delete</i> </a>
                                            </td>
                                        </tr>
                                        @endforeach
                </tbody>
            </table>
        </div><!-- .col-lg-12 -->
    </div><!-- .row -->
    <!---End Data Table-->





    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->





    <!-- The following session is added for showing flash messages ~~~~~~~~ -->
    <!-- The following session is added for showing flash messages ~~~~~~~~ -->




    @include('backend.layouts.footer')

</div><!-- .main -->
<!-- End Main Body -->

@endsection
