<section class="content-header">
  <h1>
    <?php echo $title ?>
    <small>Version 2.0</small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="container" style="margin: 10px 0;">
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm"></span>
            <span class="btn btn-primary glyphicon glyphicon-trash btn-sm"></span>
            <span class="btn btn-primary glyphicon glyphicon-pencil btn-sm"></span>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr id="tbheader">
                <th><input type="checkbox" id="check-all-gd"></th>
                <th>STT</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Ngày tạo</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                for ($i=0; $i < count($data); $i++) { ?>
                  <tr>
                    <td><input type="checkbox" class="cbsp" value="<?php echo $data[$i]['id'] ?>"></td>
                    <td><?php echo $i + 1 ?></td>
                    <td><?php echo $data[$i]['name'] ?></td>
                    <td><img style="width:50px" src="<?php echo "../public/images/products/" .$data[$i]['image'] ?>"></td>
                    <td><?php echo number_format($data[$i]['price'], 0, ',', '.') ?>&#8363;</td>
                    <td><?php echo $data[$i]['created_date'] ?></td>
                  </tr>
                <?php }
               ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- jQuery 3 -->
<script src="../views/admin/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../views/admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../views/admin/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../views/admin/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../views/admin/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../views/admin/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../views/admin/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../views/admin/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $('#sptab').addClass('active');
  $(document).ready(function(){
      $('#example1 tr').not($('#tbheader')).click(function(event){
        if (event.target.type !== 'checkbox') {
          $(':checkbox', this).trigger('click');
        }
      })
      $('#example1').addClass('active');
      $('#check-all-gd').click(function() {
       $('input:checkbox').not(this).prop('checked', this.checked);
     });
    })
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>