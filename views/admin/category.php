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
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm" id="addBtn"></span>
          </div>
          <div class="container" id="addArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
              <legend>Thêm danh mục</legend>
              <i id="addError" style="color: red"></i>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="categoryName">
              </div>
              <div class="form-group">
                <label for="">Ảnh danh mục</label>
                <input type="file" class="form-control" id="categoryImage">
              </div>
              <span class="btn btn-success" id="add2Btn">Thêm</span>
              <span class="btn btn-default" id="cancelAddBtn">Hủy</span>
            </form>
          </div>
          <div class="container" id="editArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
              <legend>Sửa danh mục</legend>
              <i id="addError" style="color: red"></i>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="categoryName4Edit">
              </div>
              <div class="form-group">
                <label for="">Ảnh danh mục</label>
                <input type="file" class="form-control" id="categoryImage4Edit">
              </div>

              <span class="btn btn-success" id="edit2Btn">Xong</span>
              <span class="btn btn-default" id="cancelEditBtn">Hủy</span>
            </form>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>STT</th>
                <th>Mã danh mục</th>
                <th>Tên danh mục</th>
                <th>Ảnh</th>
                <th>Trạng thái</th>
                <!-- <th>Tổng sản phẩm</th> -->
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                  <td><?php echo $i + 1 ?></td>
                  <td><?php echo $data[$i]['code'] ?></td>
                  <td><?php echo $data[$i]['name'] ?></td>
                  <td><img style="width: 50px" src="<?php echo "../public/images/categories/" . $data[$i]['image'] ?>"></td>
                  <td><?php echo $data[$i]['status'] ?></td>
                  <td class="text-center">
                    <span class="btn btn-primary editItemBtn" data-id='<?php echo $data[$i]['id'] ?>'>Chỉnh sửa</span>
                    <span class="btn btn-danger delItemBtn" data-id='<?php echo $data[$i]['id'] ?>'>Xóa</span>
                  </td>
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
  $('#dmsptab').addClass('active');
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
</script>
<script>
  $('#addBtn').on('click', function() {
    $('#addArea').toggle(300);
  })
  $('#cancelAddBtn').on('click', function() {
    $('#addArea').toggle(300);
  })
  $('#add2Btn').on('click', function() {
    action('add', );
  })
  $('#edit2Btn').on('click', function() {
    var id = $(this).data('id');
    action('edit', id);
  })
  $('.delItemBtn').on('click', function() {
    var cf = confirm('Bạn chắc chứ?');
    if (cf) {
      var id = $(this).data('id');
      action('del', id);
    }
  })
  $('.editItemBtn').on('click', function() {
    $('#edit2Btn').attr('data-id', $(this).data('id'));
    $('#example1').toggle();
    $('#editArea').toggle(300);
    $('#categoryName4Edit').val($(this).closest('tr').children('td:nth-child(3)').text());
    // $('#categoryImage4Edit').val($(this).closest('tr').children('td:nth-child(4)').text());
  })
  $('#cancelEditBtn').on('click', function() {
    $('#example1').toggle();
    $('#editArea').toggle(300);
  })

  function action(nameAction, id = null) {
    $('#addError').html('');
    var cateName = $('#categoryName4Edit').val();
    var cateImage = $('#categoryImage4Edit')[0].files[0];
    if (nameAction == 'add') {
      cateName = $('#categoryName').val();
      cateImage = $('#categoryImage')[0].files[0];
      if (cateName == '') {
        alert('Bạn chưa điền tên danh mục!');
        return;
      }
      if (cateImage == null) {
        alert('Bạn chưa chọn ảnh danh mục!');
        return;
      }
    }
    var formData = new FormData();
    formData.append('action', nameAction);
    formData.append('id', id);
    formData.append('name', cateName);
    formData.append('image', cateImage);

    $.ajax({
      url: 'index.php?controller=category&action=action',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false, //jQuery not to process the data
      contentType: false, //jQuery not to set contentType
      beforeSend: function() {
        if (nameAction == 'add') {
          $('#add2Btn').attr("disabled", "disabled");
          $('#cancelAddBtn').attr("disabled", "disabled");
          $('#addArea').css("opacity", ".5");
        } else {
          $('#edit2Btn').attr("disabled", "disabled");
          $('#cancelEditBtn').attr("disabled", "disabled");
          $('#editArea').css("opacity", ".5");
        }
      },
      done: function(result) {},
      fail: function(result) {},
      success: function(result) {
        console.log(result);
        if (result == 'OK') {
          alert("Successful!");
          location.reload();
        } else {
          $('#addError').html(result);
          if (nameAction == 'add') {
            $('#addArea').css("opacity", "1");
            $('#add2Btn').removeAttr('disabled');
            $('#cancelAddBtn').removeAttr('disabled');
          } else {
            $('#editArea').css("opacity", "1");
            $('#edit2Btn').removeAttr('disabled');
            $('#cancelEditBtn').removeAttr('disabled');
          }
        }
      }
    })
  }
</script>