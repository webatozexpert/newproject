
  @extends('backend.layouts.master') 
       @section('content')
  <!-- Main Body -->
    <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">

<div class="row">
  <div class="page-header col-lg-12 ">
    <center><h3>Purchase Order List</h3></center>
  </div>
</div>
<br><br>

<center>
  

    <span>Product Category: </span>
    <select style="width: 300px" class="productcategory" id="prod_cat_id">

        <option value="0" disabled="true" selected="true">-Select-</option>
        @foreach($categories as $cat)
            <option value="{{$cat->id}}">{{$cat->name}}</option>
        @endforeach

    </select>

    <span>Product Name: </span>
    <select style="width: 300px" class="productname">

        <option value="0" disabled="true" selected="true">Product Name</option>
    </select>

    <span>Product Qty: </span>
    <input type="text" class="prod_qty">



</center>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){

        $(document).on('change','.productcategory',function(){
            // console.log("hmm its change");

            var cat_id=$(this).val();
            // console.log(cat_id);
            var div=$(this).parent();

            var op=" ";

            $.ajax({
                type:'get',
                url:'{!!URL::to('findProductName')!!}',
                data:{'id':cat_id},
                success:function(data){
                    //console.log('success');

                    //console.log(data);

                    //console.log(data.length);
                    op+='<option value="0" selected disabled>chose product</option>';
                    for(var i=0;i<data.length;i++){
                    op+='<option value="'+data[i].id+'">'+data[i].name+'</option>';
                   }

                   div.find('.productname').html(" ");
                   div.find('.productname').append(op);
                },
                error:function(){

                }
            });
        });

        $(document).on('change','.productname',function () {
            var prod_id=$(this).val();

            var a=$(this).parent();
            console.log(prod_id);
            var op="";
            $.ajax({
                type:'get',
                url:'{!!URL::to('findQty')!!}',
                data:{'id':prod_id},
                dataType:'json',//return data will be json
                success:function(data){
                    console.log("qty");
                    console.log(data.qty);

                    // here price is coloumn name in products table data.coln name

                    a.find('.prod_qty').val(data.qty);

                },
                error:function(){

                }
            });


        });

    });
</script>

 
   @include('backend.layouts.footer')
   
    <!-- End Main Body -->
  </div><!-- .container-fluid -->




@endsection