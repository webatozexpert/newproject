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
                        <h3 class="title-header text-center">District List</h3>
                        <h3>
                           

                            <a class="btn btn-success float-right " href="{{route('districts.add')}}"><i class="fa fa-plus-circle">Add District</i></a>
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
                                                    <table id="example1" class="table table-bordered table-hover">
                                                        <thead>
                                                            <tr>
                                                                <th>Sl.</th>
                                                                <th>Div-Name</th>
                                                                <th>Dist-Name</th>
                                                                
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @foreach($allData as $key => $district)
                                                            <tr>
                                                                <td>{{ $key+1}}</td>
                                                               <td>{{ $district['division']['name']}}</td>
                                                                <td>{{ $district->name}}</td>
                                                               
                                                                <td>
                                                <a class="btn btn-primary btn-sm" href="{{route('districts.edit',$district->id)}}"><i class="fa fa-edit" title="Edit"></i> </a>
                                                 <a id="delete" class="btn btn-danger btn-sm" href="{{route('districts.delete',$district->id)}}"><i class="fa fa-trash" title="Delete"></i> </a>
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>

                                                </div><!-- /.card-body -->
                                            </div>
                                        </section>


                                        <!-- right col -->
                                    </div>
                                    <!-- /.row (main row) -->
                                </div><!-- /.container-fluid -->
                            </section>
                            <!-- /.content -->

                            <!--Here new Contennt-->

                        </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

</div>
@endsection
