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
                        <h3 class="box-title">User List</h3>

                        <h3>
                            <a class="btn btn-success float-right " href="{{route('profile.view')}}"><i class="fa fa-plus">Your Profile</i></a>
                        </h3>


                        <div class="box-tools pull-right">

                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                        </div>
                    </div>

                    <div class="box-body">

                        <div class="row">


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
                                                <!-- /.card-header -->
                                                <div class="card-body">
                                                    <form method="post" action="{{route('profile.update')}}" id="myForm" enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="form-row">

                                                            <div class="form-group col-md-4">
                                                                <label for="name">Name</label>
                                                                <input type="text" name="name" value="{{$editData->name}}" class="form-control">
                                                                <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="email">Email</label>
                                                                <input type="email" name="email" value="{{$editData->email}}" class="form-control">
                                                                <font style="color:red">{{($errors->has('email'))?($errors->first('email')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="mobile">Mobile No</label>
                                                                <input type="text" name="mobile" value="{{$editData->mobile}}" class="form-control">
                                                                <font style="color:red">{{($errors->has('mobile'))?($errors->first('mobile')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="address">Address</label>
                                                                <input type="text" name="address" value="{{$editData->address}}" class="form-control">
                                                                <font style="color:red">{{($errors->has('address'))?($errors->first('address')):''}}</font>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="gender">Gender</label>
                                                                <select name="gender" id="gender" class="form-control">
                                                                    <option value="">Select Gender</option>
                                                                    <option value="male" {{($editData->gender=="male")?"selected":""}}>Male</option>
                                                                    <option value="Female" {{($editData->gender=="Female")?"selected":""}}>Female</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="image">Image</label>
                                                                <input type="file" name="image" class="form-control" id="image">
                                                            </div>
                                                            <div class="form-group col-md-2">
                                                                <img id="showImage" src="{{(!empty($editData->image))?url('public/upload/user_images/'.$editData->image):url('public/upload/no_imgae .png')}}" style="width:150px; height: 160px; border:1px solid #000;">
                                                            </div>

                                                            <div class="form-group col-md-6" style="padding-top:120px;">

                                                                <input type="submit" value="update" class="btn btn-primary">
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
