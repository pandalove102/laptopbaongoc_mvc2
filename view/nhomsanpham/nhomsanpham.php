<?php
//  xem_arr($data['danhsach_nhomsp']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=nhomsanpham&act=add_nhomsanpham_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a>
                <div class="card-content">
                    <h4 class="card-title">Nhóm Sản Phẩm</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            
                           
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Tên Nhóm SP</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Alias</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Cập Nhật Cuối </th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
                          <?php
                                  foreach($data['danhsach_nhomsp'] as $item)
                                  {
                          ?>
                          <tr role="row" class="odd">
                                  <td class="text-center sorting" tabindex="0"><?=$item->id_nhomsanpham;?></td>
                                  <td class="text-center sorting" tabindex="0"><?=$item->ten_nhomsanpham;?></td>
                                  <td class="text-center sorting"><?=$item->alias?></td>
                                  <td class="text-center sorting"><?=$item->ngaytao?></td>
                                  <td class="text-center sorting"><?=$item->capnhatcuoicung?></td>
                                  <td class="text-center sorting"><?=$item->ten_trangthai?></td>
                                  <td class="td-actions text-center">
                                      <a href="?controller=nhomsanpham&act=chitiet_nhomsanpham&id=<?=$item->id_nhomsanpham;?>" class="btn btn-success btn-simple" >
                                          <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div></a>
                                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="?controller=loaikhachhang&act=dell_loaikhachhang&id=<?=$item->id_nhomsanpham;?>" class="btn btn-danger btn-simple">
                                          <i class="material-icons">close</i>
                                  </a>
                                  </td>
                              </tr>
                              <?php
                                      }
                              ?>
                              </tr></tbody>
                      </table>
                  </div>
                </div>
              
            </div>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        <!-- </div> -->
        <!-- end col-md-12 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <!-- <a href="?controller=nhomsanpham&act=add_nhomsanpham_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a> -->
                <div class="card-content">
                    <h4 class="card-title">Sản Phẩm</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                    <select  id="idnhomsanpham"  class="selectpicker" name="idnhomsanpham"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                                <option class="bs-title-option" value="">Single Select</option>
                                <option  disabled="" selected="">Chọn</option>
                                <?php
                                    foreach(@$data['danhsach_nhomsp'] as $k=>$v)
                                    {
                                ?>
                                <option   value="<?php echo @$v->id_nhomsanpham ?>" >
                                    <?php echo @$v->ten_nhomsanpham ?>
                                </option>
                                <?php
                                    }
                                ?>
                            </select>
                      <div class="row">
                          <div class="col-sm-12">
                              <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                              <thead>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Tên SP</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Số Lượng</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Giá</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Tạo</th>
                                <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                                <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                                </tr>
                            </thead>
                          <tbody role="row" class="odd" id="kq">
                                    <!-- mac dinh se không có kết quả  -->
                          </tbody>
                      </table>
                  </div>
                </div>
              
            </div>
                    </div>
                </div>
                <!-- end content-->
            </div>
            <!--  end card  -->
        </div>
    </div>
<!-- end row -->
</div>
<script>
    $(function(){
    $('#idnhomsanpham').change(function(){
    $.ajax({
        url: "http://localhost/laptopbaongoc_mvc/?controller=nhomsanpham&act=api_danhsach_sanpham_nhomsanpham_id",
        data: { "idnhomsanpham": $("#idnhomsanpham").val() },
        dataType:"html",
        type: "post",
        success: function(data){
           $('#kq').empty();
           $('#kq').append(data);
        }
    });
});
});
</script>
