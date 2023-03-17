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
            <span class="btn btn-primary btn-sm glyphicon glyphicon-trash" id="delBtn"></span>
            <span class="btn btn-success btn-sm" id="shippedBtn">Đã giao</span>
            <span class="btn btn-warning btn-sm" id="unshippedBtn">Chưa giao</span>
            <span class="btn btn-danger btn-sm" id="cancelBtn">Hủy</span><br>
            <i style="color:red" id="error"></i>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr id="tbheader">
                <th><input type="checkbox" id="check-all-gd"></th>
                <th>STT</th>
                <th>Tình trạng</th>
                <th>Tên KH</th>
                <th>Quận</th>
                <th>Đ/C cụ thể</th>
                <th>SDT</th>
                <th>Ngày tạo</th>
                <th>Sản phẩm</th>
                <th>Tổng tiền</th>
              </tr>
            </thead>
            <tbody>
              <?php for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                  <td><input type="checkbox" class="cbgd" value="<?php echo $data[$i]['id'] ?>"></td>
                  <td><?php echo $i + 1 ?></td>
                  <td>
                    <?php if ($data[$i]['status'] == 'delivered') {
                      echo "<span class='label label-success'>Đã giao</span>";
                    } elseif ($data[$i]['status'] == 'waiting') {
                      echo "<span class='label label-warning'>Chưa giao</span>";
                    } else {
                      echo "<span class='label label-danger'>Hủy</span>";
                    } ?>
                  </td>
                  <td><?php echo $data[$i]['first_name'] . " " . $data[$i]['last_name'] ?></td>
                  <td><?php echo $data[$i]['district'] ?? "" ?></td>
                  <td><?php echo $data[$i]['address'] ?? "" ?></td>
                  <td><?php echo $data[$i]['phone'] ?></td>
                  <td><?php echo $data[$i]['created_date'] ?></td>
                  <td>
                    <?php
                    for ($j = 0; $j < count($data[$i]['items']); $j++) {
                      echo $data[$i]['items'][$j]['name'] . "(sl: " . $data[$i]['items'][$j]['quantity'] . ")<br>";
                    }
                    ?>
                  </td>
                  <td><?php echo array_reduce($data[$i]["items"], function ($sum, $item) {
                        $sum += ($item['quantity'] * $item['price']);
                        return $sum;
                      }, 0); ?>&#8363;</td>
                </tr>
              <?php } ?>
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
  $('#gdtab').addClass('active');
  $(document).ready(function() {
    $('#example1 tr').not($('#tbheader')).click(function(event) {
      if (event.target.type !== 'checkbox') {
        $(':checkbox', this).trigger('click');
      }
    })
    $('#example1').addClass('active');
    $('#check-all-gd').click(function() {
      $('input:checkbox').not(this).prop('checked', this.checked);
    });
    $('#shippedBtn').click(function() {
      updateState('shipped');
    });
    $('#unshippedBtn').click(function() {
      updateState('unshipped');
    });
    $('#cancelBtn').click(function() {
      updateState('cancel');
    });
    $('#delBtn').click(function() {
      updateState('del');
    });
  })
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
  })

  function updateState(state) {
    var selected = [];
    $('.cbgd').each(function() {
      if ($(this).is(":checked")) {
        selected.push($(this).val());
      }
    })
    if (selected == '') {
      alert("Bạn chưa chọn giao dịch muốn đổi trạng thái!");
      return;
    }
    $.ajax({
      url: 'index.php?controller=order&action=updateState',
      type: 'GET',
      dataType: 'text',
      data: {
        selected,
        state
      },
      done: function(result) {},
      fail: function(result) {},
      success: function(result) {
        if (result == "OK") {
          location.reload();
        } else {
          $('#error').html(result);
        }
      }
    })
  }
</script>