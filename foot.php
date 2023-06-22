 <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Matrix-admin. Designed and Developed by <a
                    href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
 
    <!-- <script src="assets/libs/jquery/dist/jquery.min.js"></script> -->
    <!-- <script>
        $(function(){
            $.ajax({
                    url : 'show_info.php',
                    method : 'GET',
                        data:{
                            msg : 'success',
                        },
                        success: function(data){
                            $('#show_info').html(data);
                        }
                    }) 
            $('#btn-save').click(function(){
                var code = $('#stu_code').val();
                var sex = $('#stu_sex').val();
                var name = $('#stu_name').val();
                var born = $('#stu_born').val();
                if(code !=='' && sex !=='' && name !=='' && born !==''){
                    $.ajax({
                    url : 'stu_save.php',
                    method : 'POST',
                        data:{
                            stu_code : code,
                            stu_sex : sex,
                            stu_name : name,
                            stu_born : born,
                        },
                        success: function(data){
                            if(data == 'success'){
                                $('#msg').text(data);
                              
                            }else{
                                $('#msg').text(data);
                            }
                        }
                    })
                    setTimeout(() => {
                        $('#f1')[0].reset();
                        $('#msg').empty();
                    }, 2500);

                    $.ajax({
                    url : 'show_info.php',
                    method : 'GET',
                        data:{
                            msg : 'success',
                        },
                        success: function(data){
                            $('#tbl').remove();
                            $('#show_info').html(data);
                            $('#f1')[0].reset();
                        }
                    }) 
                    
                }else{
                        $('#msg').html('กรุณาใส่ข้อมูลให้ครบถ้วน');
                        setTimeout(() => {
                        $('#f1')[0].reset();
                        $('#msg').empty();
                    }, 2500);
                }

            }) 
            $('.bi-trash').click(function(){
                alert('hello');
            });
        })
    
          
    </script> -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- <script src="assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script> -->
    <script src="assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!-- <script src="dist/js/pages/dashboards/dashboard1.js"></script> -->
    <!-- Charts js Files -->
    <script src="assets/libs/flot/excanvas.js"></script>
    <script src="assets/libs/flot/jquery.flot.js"></script>
    <script src="assets/libs/flot/jquery.flot.pie.js"></script>
    <script src="assets/libs/flot/jquery.flot.time.js"></script>
    <script src="assets/libs/flot/jquery.flot.stack.js"></script>
    <script src="assets/libs/flot/jquery.flot.crosshair.js"></script>
    <script src="assets/libs/flot.tooltip/js/jquery.flot.tooltip.min.js"></script>
    <script src="dist/js/pages/chart/chart-page-init.js"></script>
    <div class="modal" tabindex="-1" id="modal">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

</body>

</html>