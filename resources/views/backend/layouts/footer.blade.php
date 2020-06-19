
  <footer class="main-footer">
    
        <center>
            <h5>Powered By: Aver Fresh Limited. &copy; 2020 </h5>
        </center> <!-- <img style="height:50px; width:70px;" class="img-responsive logo" src="{{asset('public/backend')}}/img/logo.png"> -->
    
  </footer>

</div>
<!-- ./wrapper -->


<!-- Bootstrap 3.3.7 -->
<script src="{{asset('public/backend')}}/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="{{asset('public/backend')}}/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="{{asset('public/backend')}}/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="{{asset('public/backend')}}/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{asset('public/backend')}}/dist/js/demo.js"></script>
<!-- DataTables -->
<script src="{{asset('public/backend')}}/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- jquery-validation -->
<script src="{{asset('public/backend')}}/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="{{asset('public/backend')}}/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- Select2 -->
<script src="{{asset('public/backend')}}/plugins/select2/js/select2.full.min.js"></script>


 <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });

    </script>
     <script>
        $(function() {
            $(document).on('click', '#delete', function(e) {
                e.preventDefault();
                var link = $(this).attr("href");
                Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete this data!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.location.href = link;
                        Swal.fire(
                            'Deleted!',
                            'Your file has been deleted.',
                            'success'
                        )
                    }
                })
            });
        });

    </script>
    <script class="text/javascript">
        $(document).ready(function() {
            $('#image').change(function(e) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#showImage').attr('src', e.target.result);
                }
                reader.readAsDataURL(e.target.files['0']);
            });
        });

    </script>
    <script class="text/javascript">
         //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })
    </script>
</body>
</html>
