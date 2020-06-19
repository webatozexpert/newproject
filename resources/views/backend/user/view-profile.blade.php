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
                        <h3 class="box-title">View Profile</h3>
                        <h3>
                            <a class="btn btn-success float-right " href="{{route('home')}}"><i class="fa fa-plus-circle">Home</i></a>
                        </h3>
                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="row">



                            <!-- ============================================================= -->
                            <!-- S C R I P T    S T A R T S     H E R E  -->
                            <!-- ============================================================= -->

                            <!-- ============================================================= -->
                            <!-- S C R I P T              E N D S             H E R E          -->
                            <!-- ============================================================= -->



                            <div class="col-lg-12">

                                <div class="tab-content mar-top">

                                    <div class="row">
                                        <div class="col-lg-10 ">
                                            <div class="panel ">
                                                <div class="panel-heading">
                                                    <h3 class="panel-title text-center">
                                                        User Profile Details
                                                    </h3>
                                                </div>
                                                <div class="panel-body">
                                                    <div class="col-md-4">
                                                        <div class="text-center ">
                                                            <div style=" margin-top:10px; ">
                                                                <div class=" thumbnail img-file " style="width: 200px; height: 300px; ">

                                                                    <img src="{{(!empty($user->image))?url('public/upload/user_images/'.$user->image):url('public/upload/no_imgae .png')}}" alt="User profile picture" width="200" class="img-responsive" height="150" alt="riot">
                                                                    <h4 style="margin-top: 50px">User Photo</h4>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <div class="panel-body">
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered table-striped" id="users">
                                                                    <tr>
                                                                        <td>User Name</td>
                                                                        <td>
                                                                        <td>{{$user->name}}</td>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>E-mail</td>
                                                                        <td>
                                                                        <td>{{$user->email}}</td>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Phone Number</td>
                                                                        <td>
                                                                        <td>{{$user->mobile}}</td>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Address</td>
                                                                        <td>
                                                                        <td>{{$user->address}}</td>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Status</td>
                                                                        <td>
                                                                        <td>{{$user->status}}</td>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Gender</td>
                                                                        <td>
                                                                        <td>{{$user->gender}}</td>
                                                                        </td>
                                                                    </tr>

                                                                </table>
                                                            </div>
                                                            <a href="{{route('profile.edit')}}" class="btn btn-primary btn-block"><b>Edit Profile</b></a>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </section>



            <!--Here new Contennt-->

        </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
