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
                        <h3 class="box-title ">User List</h3>
                        <h3>
                            <a class="btn btn-success float-right " href="{{route('users.add')}}"><i class="fa fa-plus-circle">Edit User</i></a>
                        </h3>
                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="row">

                            <div class="card-body">
                                <form method="post" action="{{route('users.update',$editData->id)}}" id="myForm">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="usertype">User Role</label>
                                            <select name="usertype" id="usertype" class="form-control">
                                                <option value="">Select Role</option>
                                                <option value="Super Admin" {{($editData->usertype=="Super Admin")?"selected":""}}> Super Admin</option>
                                                <option value="Admin" {{($editData->usertype=="Admin")?"selected":""}}>Admin</option>
                                                <option value="User" {{($editData->usertype=="User")?"selected":""}}>User</option>

                                            </select>
                                            <font style="color:red">{{($errors->has('usertype'))?($errors->first('usertype')):''}}</font>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="name">Name</label>
                                            <input type="text" name="name" value="{{$editData->name}}" class="form-control ">
                                            <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                                            <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                        </div>

                                        <div class="form-group col-md-4 ">

                                            <input type="submit" value="Update" class="btn btn-primary">
                                        </div>

                                    </div>
                                </form>
                            </div>

                            <!--Here new Contennt-->

                        </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

</div>
@endsection
