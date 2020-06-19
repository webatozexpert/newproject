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
                        <h3 class="box-title">Add-User</h3>
                        <h3>
                            <a class="btn btn-success float-right " href="{{route('users.view')}}"><i class="fa fa-list">User List</i></a>
                        </h3>


                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="row">

                            <!-- Left col -->
                            <section class="col-lg-12 ">
                                <!-- Custom tabs (Charts with tabs)-->
                                <div class="card">

                                    <div class="card-body">
                                        <form method="post" action="{{route('users.store')}}" id="myForm">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label for="usertype">User Role</label>
                                                    <select name="usertype" id="usertype" class="form-control">
                                                        <option value="">Select Role</option>
                                                        <option value="Super Admin"> Super Admin</option>
                                                        <option value="Admin">Admin</option>
                                                        <option value="User">User</option>
                                                    </select>
                                                    <!-- <font style="color:red">{{($errors->has('usertype'))?($errors->first('usertype')):''}}</font>-->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="name">Name</label>
                                                    <input type="text" name="name" class="form-control ">
                                                    <!-- <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>-->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="email">Email</label>
                                                    <input type="email" name="email" class="form-control">
                                                    <!--<font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>-->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="password">Password</label>
                                                    <input type="password" name="password" id="password" class="form-control">
                                                    <!--<font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>-->
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="password">Confirm Password</label>
                                                    <input type="password" name="password2" class="form-control">
                                                    <!-- <font style="color:red">{{($errors->has('password'))?($errors->first('password')):''}}</font>-->
                                                </div>
                                                <div class="form-group col-md-4 " style="padding-top:26px;">

                                                    <input type="submit" value="submit" class="btn btn-primary">
                                                </div>

                                            </div>
                                        </form>
                                    </div><!-- /.card-body -->
                                </div>
                            </section>

                            <!-- right col -->
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

<script type="text/javascript">
    $(document).ready(function() {

        $('#myForm').validate({
            rules: {
                usertype: {
                    required: true,

                },
                name: {
                    required: true,

                },
                email: {
                    required: true,
                    email: true,
                },
                password: {
                    required: true,
                    minlength: 8
                },
                password2: {
                    required: true,
                    equalTo: '#password'
                },
            },
            messages: {
                usertype: {
                    required: "Please select user role",

                },
                name: {
                    required: "Please enter your name",

                },
                email: {
                    required: "Please enter a email address",
                    email: "Please enter a <em>valid</em> email address"
                },
                password: {
                    required: "Please enter your password",
                    minlength: "Your password must be at least 8 characters long"
                },
                password2: {
                    required: "Please enter confirm password",
                    equalTo: "confirm password does not match"
                },

            },
            errorElement: 'span',
            errorPlacement: function(error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function(element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function(element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });

</script>

@endsection
