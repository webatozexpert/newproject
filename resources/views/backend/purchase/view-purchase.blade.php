@extends('backend.layouts.master') 
       @section('content')
        <!-- Content Wrapper. Contains page content -->
    
  
   <!-- Main Body -->
    <div class="col-lg-offset-2 col-lg-10 col-md-offset-2 col-md-10 col-sm-12 main">



      <!-- The following session is added for showing flash messages ~~~~~~~~ -->
            <!-- The following session is added for showing flash messages ~~~~~~~~ -->


      
      
<!-- ============================================================= -->
<!-- S C R I P T    S T A R T S     H E R E  -->
<!-- ============================================================= -->

<style type="text/css">

td.details-control {
  background: url('http://192.168.47.14/qfl/assets/img/details_open.png') no-repeat center center;
  cursor: pointer;
}
tr.shown td.details-control {
  background: url('http://192.168.47.14/qfl/assets/img/details_close.png') no-repeat center center;
}
</style>



<script>


function format(d) {
    return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
    '<tr>'+
    '<td>'+"Branch"+'</td>'+
    '<td>'+"Requisition No"+'</td>'+
    '<td>'+"Group"+'</td>'+
    '<td>'+"Product Name"+'</td>'+
    '<td>'+"Rate"+'</td>'+
    '<td>'+"Quantity"+'</td>'+
    '<td></td>'+
    '</tr>'+

    '<tr>'+
    '<td>'+d.branch+'</td>'+
    '<td>'+d.requisition_no+'</td>'+
    '<td>'+d.product_group+'</td>'+
    '<td>'+d.product_name+'</td>'+
    '<td>'+d.rate_per_unit+'</td>'+
    '<td>'+d.order_quantity+'</td>'+
    '<td></td>'+
    '</tr>'+

    '</table>';
}





  $(document).ready(function() {
      var table = $('#purchase_order_list_tbl').DataTable( {
          destroy:        true,
          paging:         true,
          searching:      true,
          ordering:       false,
          bInfo:          false,
  
          // "columnDefs": [
          //     {
          //         "targets": [8],
          //         "visible": false,
          //     }        
          // ],  
          "ajax": {
                'type': 'POST',
                'url': "http://192.168.47.14/qfl/purchase_order_viewdata",
                'data': {
                        status: 1,
                        approved: 1
                    },              
          },

          "columns": [
            {
              "className":      'details-control',
              "orderable":      false,
              "data":           null,
              "defaultContent": ''
            },          
            { "data": "po_number" },
            { "data": "order_date" },
            { "data": "supplier_name" },
            { "data": "username" },
                                    { "data": "Link",
              "mRender": function (data, type, full) {
                return '<a href="http://192.168.47.14/qfl/purchase_order_print_preview/'+(full.id)+'" target="_blank" class="btn btn-primary btn-lg btn-sm"> <span class="glyphicon glyphicon-print"></span>Print</a>';
              }
            },
            // { "data": "product_name" },
          ],
          "order": [[1, 'asc']]          

      });

      $('#purchase_order_list_tbl tbody').on('click', 'td.details-control', function (){
        var tr = $(this).closest('tr');
        var row = table.row( tr );
            if ( row.child.isShown()) {
                row.child.hide();
                tr.removeClass('shown');
            } else {
                row.child( format(row.data()) ).show();
                tr.addClass('shown');
            }
      });
  });

</script>
<!-- ============================================================= -->
<!-- S C R I P T    S T A R T S     H E R E  -->
<!-- ============================================================= -->


<div class="row">
  <div class="page-header col-lg-12 ">
    <center><h3>Purchase Order List</h3></center>
  </div>
</div>
<br><br>
<div class="row">
  <div class="col-lg-12 col-md-12 col-xs-12" style="margin-left: -10px;">
      <a href="{{route('purchase.add')}}">  <input type="button" value="+ Create New Order"     class="col-lg-offset-9 col-lg-2 col-md-offset-9 col-md-2 col-sm-offset-9 col-sm-2 col-xs-offset-7 col-xs-2 btn btn-sm button btn-primary pull-left"     style="font-size: 12px; font-weight: bold;"></a>
    <!--  <a href="http://192.168.47.14/qfl/purchase_order_daybook">  <input type="button" value="Day Book"               class="col-lg-offset-9 col-lg-2 col-md-offset-9 col-md-2 col-sm-offset-9 col-sm-2 col-xs-offset-7 col-xs-2 btn btn-sm button btn-primary pull-left"     style="font-size: 12px; font-weight: bold;"></a>-->
  </div>
</div>


<!---Data Table-->
<div class="row">
  <div class="col-lg-12 datatablescope ">
    <table id="purchase_order_list_tbl" class="stripe row-border order-column" cellspacing="0" width="100%">
      <thead>
        <tr>
          <th style="width:05%;" >Detals</th>
          <th style="width:10%;" >P.O No</th>
          <th style="width:10%;" >P.O Date</th>
          <th style="width:20%;" >Supplier Name</th>
          <th style="width:10%;" >Prepared By</th>
                              <th style="width:05%;" >Print</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
    </table>
  </div>
</div>
<!---End Data Table-->

  
  
   @include('backend.layouts.footer')
   
    <!-- End Main Body -->
  </div><!-- .container-fluid -->


  
      @endsection     