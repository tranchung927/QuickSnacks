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
          <div class="container" style="margin:10px 0;">
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm" id="createProductBtn"></span>
            <span class="btn btn-primary glyphicon glyphicon-trash btn-sm"></span>
            <span class="btn btn-primary glyphicon glyphicon-pencil btn-sm"></span>
            <div class="container" id="addProductArea" style="width:100%;display:none;padding-bottom:10px;margin-top:10px;">
              <form action="" method="POST" role="form">
                <legend>Thêm sản phẩm</legend>
                <i id="addProductError" style="color:red"></i>
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text" class="form-control" id="addProductName">
                </div>
                <div class="form-group">
                  <label for="">Ảnh sản phẩm</label>
                  <input type="file" class="form-control" id="addProductImage">
                </div>
                <div class="form-group">
                  <label for="">Giá sản phẩm</label>
                  <input type="number" class="form-control" id="addProductPrice">
                </div>
                <div class="form-group">
                  <label for="">Danh mục sản phẩm</label>
                  <select name="sltCategory" id="addProductCategory">
                    <?php
                    require_once("../vendor/Model.php");
                    require_once("../models/CategoryModel.php");
                    $md = new CategoryModel;
                    $cates = $md->getAll();
                    for ($i = 0; $i < count($cates); $i++) {
                    ?>
                       <option value="<?php echo $cates[$i]["id"]?>"><?php echo $cates[$i]["name"]?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="">Thành phần</label>
                  <input type="text" class="form-control" id="addProductElement">
                </div>
                <div class="form-group">
                  <label for="">Lượng Calo</label>
                  <input type="number" class="form-control" id="addProductCalo">
                </div>
                <div class="form-group">
                  <label for="">Mô tả</label>
                  <input type="text" class="form-control" id="addProductDesc">
                </div>
                <span class="btn btn-success" id="addProductBtn">Thêm</span>
                <span class="btn btn-default" id="cancelAddProBtn">Hủy</span>
              </form>
            </div>
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
              for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                  <td><input type="checkbox" class="cbsp" value="<?php echo $data[$i]['id'] ?>"></td>
                  <td><?php echo $i + 1 ?></td>
                  <td><?php echo $data[$i]['name'] ?></td>
                  <td><img style="width:50px" src="<?php echo "../public/images/products/" . $data[$i]['image'] ?>"></td>
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

  $('#createProductBtn').on('click', function() {
    $('#addProductArea').toggle(300);
  })
  $('#cancelAddProBtn').on('click', function() {
    $('#addProductArea').toggle(300);
  })
  $('#addProductBtn').on('click', function() {
    action('add');
  })

  function action(nameAction, id = null) {
    $('#addProductError').html('');
    var productImage = $('#addProductImage')[0].files[0];
    var productPrice = $('#addProductPrice').val();
    var productName = $('#addProductName').val();
    var productCategory = $('#addProductCategory').find(":selected").val();
    var productElement = $('#addProductElement').val();
    var productCalo = $('#addProductCalo').val();
    var productDesc = $('#addProductDesc').val();

    var formData = new FormData();
    formData.append('price', productPrice);
    formData.append('name', productName);
    formData.append('category', productCategory);
    formData.append('image', productImage);
    formData.append('element', productElement);
    formData.append('calo', productCalo);
    formData.append('desc', productDesc);

    $.ajax({
      url: 'index.php?controller=product&action=add',
      type: 'POST',
      data: formData,
      cache: false,
      processData: false, //jQuery not to process the data
      contentType: false, //jQuery not to set contentType
      done: function(result) {},
      fail: function(result) {},
      success: function(result) {
        console.log(result);
        if (result == 'OK') {
          alert("Successful!");
          location.reload();
        } else {
          $('#addProductError').html(result);
        }
      }
    })
  }
</script>