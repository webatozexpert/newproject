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
                        
                        <h3>
                            @if(@$editData)
                            Edit-Division
                            @else
                            Add-Division
                            @endif
                           <div class="text-right"> <a class="btn btn-success  " href="{{route('divisions.view')}}"><i class="fa fa-list">Division List</i></a></div>
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
                                        <form method="post" action="{{(@$editData)?route('divisions.update',$editData->id):route('divisions.store')}}" id="myForm">
                                            @csrf
                                            <div class="form-row">
                                                
                                                <div class="form-group col-md-4">
                                                    <label >Div-Name</label>
                                                    <input type="text" id="division_id" name="name" value="{{@$editData->name}}" class="form-control ">
                                                     <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                                </div>
                                                
                                                
                                                <div class="form-group col-md-2 text-left " style="padding-top:26px;">

                                                    <button type="submit"  class="btn btn-primary">{{(@$editData)?"Update":"Submit"}}</button>
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
           
                name: {
                    required: true,

                },
               
            messages: {
               
                name: {
                    required: "Please enter division name",

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
