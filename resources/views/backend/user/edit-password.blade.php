@extends('backend.layouts.master')
@section('content')

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content" style="padding: 5px; margin-right: auto; margin-left: auto; padding-left: 5px; padding-right: 5px;">
        <div class="flash-message">

            <!--Here new Contennt-->

            <!-- =============================================== -->

            <section class="content">
                <div class="box box-default">
                    <div class="box-header with-border">
                        <h3 class="box-title">Password Change</h3>
                        <h3>
                            <a class="btn btn-success float-right " href="{{route('home')}}"><i class="fa fa-plus-circle">Home</i></a>
                        </h3>
                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="row">

                            <br><br>

                            <section class="content">
                                <div class="container-fluid">
                                    <!-- /.row -->
                                    <!-- Main row -->
                                    <div class="row">
                                        <!-- Left col -->
                                        <section class="col-lg-12 ">
                                            <!-- Custom tabs (Charts with tabs)-->
                                            <div class="card">
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <form method="post" action="{{route('profile.password.update')}}" id="myForm">
                                                        @csrf
                                                        <div class="form-row">
                                                            <div class="form-group col-md-4">
                                                                <label for="current_password">Current Password</label>
                                                                <input type="password" name="current_password" id="current_password" class="form-control">
                                                                <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="new_password">New Password</label>
                                                                <input type="password" name="new_password" id="new_password" class="form-control">
                                                                <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="again_new_password">Again New Password</label>
                                                                <input type="password" name="again_new_password" class="form-control">
                                                                <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4 ">

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


                        </div>

                    </div>

                </div>
            </section>

        </div>
    </section>

</div>
<!-- /.content-wrapper -->
@endsection
