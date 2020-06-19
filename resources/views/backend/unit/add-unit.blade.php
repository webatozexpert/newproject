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
                <h3>Create New Unit</h3>
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
                         <div class="card-body">
                            <form method="post" action="{{route('units.store')}}" >
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                     <label for="name">Unit Name</label>
                                     <input type="text" name="name" class="form-control" id="name">
                                     <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                    </div>
                                    
                                    
                                    <div class="form-group col-md-6"  style="padding-top:30px;">

                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>

                                </div>
                            </form>
                        </div><!-- /.card-body -->
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
