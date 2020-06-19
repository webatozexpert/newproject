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
                            Edit-Union
                            @else
                            Add-Union
                            @endif
                           <div class="text-right"> <a class="btn btn-success  " href="{{route('unions.view')}}"><i class="fa fa-list">Union List</i></a></div>
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
                                        <form method="post" action="{{(@$editData)?route('unions.update',$editData->id):route('unions.store')}}" id="myForm">
                                            @csrf
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label >Div-Name</label>
                                                    <select class="form-control select2" name="division_id" id="division_id">
                                                        <option value=""> Select Div-Name</option>
                                                        @foreach($divisions as $division)
                                                        <option value="{{$division->id}}" {{(@$editData->division_id==$division->id)?"Selected":""}}>{{$division->name}}</option>
                                                        @endforeach
                                                    </select>
                                                     <font style="color:red">{{($errors->has('division_id'))?($errors->first('division_id')):''}}</font>
                                                </div>
                                                 <div class="form-group col-md-6">
                                                    <label >Dist-Name</label>
                                                    <select class="form-control select2" name="district_id" id="district_id">
                                                    <option value=""> Select Dis-Name</option>
                                                        
                                                    </select>
                                                     <font style="color:red">{{($errors->has('district_id'))?($errors->first('district_id')):''}}</font>
                                                </div>
                                                 <div class="form-group col-md-5">
                                                    <label >Upa-Name</label>
                                                    <select class="form-control select2" name="upazila_id" id="upazila_id">
                                                    <option value=""> Select Upa-Name</option>
                                                        
                                                    </select>
                                                     <font style="color:red">{{($errors->has('upazila_id'))?($errors->first('upazila_id')):''}}</font>
                                                </div>
                                                

                                                <div class="form-group col-md-5">
                                                    <label >Uni-Name</label>
                                                    <input type="text"  name="name" value="{{@$editData->name}}" class="form-control " placeholder="Enter union Name">
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
        else if(element.attr("name") == "district_id"){error.insertAfter(element.next());}
         else if(element.attr("name") == "upazila_id"){error.insertAfter(element.next());}
         else if(element.attr("name") == "name"){error.insertAfter(element.next());}
        else{error.insertAfter(element);}
    },
    errorClass:'text-danger',
     validClass:'text-success',
    rules: {
        
      division_id: {
        required: true,
        
      },
      district_id: {
        required: true,
        
      },
      upazila_id: {
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
      district_id: {
        required: "Please Enter District Name",
       
      },
      upazila_id: {
        required: "Please Enter Upazila Name",
       
      },
       name: {
        required: "Please Enter Union Name",
       
      },
     
    },
    
  });
});
</script>


<script type="text/javascript">
  $(function(){
    $(document).on('change','#division_id',function(){
      var division_id = $(this).val();
      $.ajax({
        url:"{{route('default-get-district')}}",
        type:"GET",
        data:{division_id:division_id},
        success:function(data){
          var html = '<option value="">Select District</option>';
          $.each(data,function(key,v){
            html +='<option value="'+v.id+'">'+v.name+'</option>';
          });
          $('#district_id').html(html);
          var district_id = "{{@$editData->district_id}}";
          if(district_id !=''){
            $('#district_id').val(district_id).trigger('change');
          }
        }
      });
    });
  });
</script>

<script type="text/javascript">
  $(function(){
    $(document).on('change','#district_id',function(){
      var district_id = $(this).val();
      $.ajax({
        url:"{{route('default-get-upazila')}}",
        type:"GET",
        data:{district_id:district_id},
        success:function(data){
          var html = '<option value="">Select Upazila</option>';
          $.each(data,function(key,v){
            html +='<option value="'+v.id+'">'+v.name+'</option>';
          });
          $('#upazila_id').html(html);
          var upazila_id = "{{@$editData->upazila_id}}";
          if(upazila_id !=''){
            $('#upazila_id').val(upazila_id);
          }
        }
      });
    });
  });
</script>

<script type="text/javascript">
   $(function(){
     var division_id = "{{@$editData->division_id}}";
    if(division_id){
        $('#division_id').val(division_id).trigger('change');
    }
   });
</script>
@endsection
