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
                            Edit-District
                            @else
                            Add-District
                            @endif
                           <div class="text-right"> <a class="btn btn-success  " href="{{route('districts.view')}}"><i class="fa fa-list">District List</i></a></div>
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
                                        <form method="post" action="{{(@$editData)?route('districts.update',$editData->id):route('districts.store')}}" id="myForm">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-4">
                                                    <label >Div-Name</label>
                                                    <select class="form-control select2" name="division_id" id="division_id">
                                                        <option value=""> Select Div-Name</option>
                                                        @foreach($divisions as $division)
                                                        <option value="{{$division->id}}" {{(@$editData->division_id==$division->id)?"Selected":""}}>{{$division->name}}</option>
                                                        @endforeach
                                                    </select>
                                                     <font style="color:red">{{($errors->has('name'))?($errors->first('name')):''}}</font>
                                                </div>
                                                

                                                <div class="form-group col-md-4">
                                                    <label >Dist-Name</label>
                                                    <input type="text" id="district_id" name="name" value="{{@$editData->name}}" class="form-control " placeholder="Enter District Name">
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
$(document).ready(function () {
 
  $('#myForm').validate({
    ignore:[],
    errorPlacement:function(error,element){
        if(element.attr("name") == "division_id"){error.insertAfter(element.next());}
        else if(element.attr("name") == "name"){error.insertAfter(element.next());}
       
        else{error.insertAfter(element);}
    },
    errorClass:'text-danger',
     validClass:'text-success',
    rules: {
        
      division_id: {
        required: true,
        
      },
      name: {
        required: true,
        
      },
     
     
    },
    messages: {
        
      division_id: {
        required: "Please Enter Division Name",
       
      },
      name: {
        required: "Please Enter District Name",
       
      },
      
     
    },
    
  });
});
</script>




@endsection
