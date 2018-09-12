<?php
//xem_arr($data['nhacungcap']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=nhacungcap&act=add_nhacungcap_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a>
                <div class="card-content">
                    <h4 class="card-title">Nhà Cung Cấp</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      
                      <div class="row">
                      <div class="col-sm-12">
                              <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            
                           
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Tên Nhà Cung Cấp</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Ghi Chú</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
                          <?php
                              foreach($data['nhacungcap'] as $item)
                              {
                          ?>       
                          <tr role="row" class="odd">
                                  <td class="text-center sorting" tabindex="0"><?=$item->id_nhacungcap;?></td>
                                  <td class="text-center sorting" tabindex="0"><?=$item->ten_nhacungcap;?></td>
                                  <td class="text-center sorting"><?=$item->ghichu?></td>
                                  <td class="text-center sorting"><?=$item->ngaytao?></td>
                                  <td class="text-center sorting"><?=$item->ten_trangthai?></td>
                                  <td class="td-actions text-center">
                                      <!-- <button type="submit" rel="tooltip" value="<?=$item->id_nhacungcap;?>" class="btn btn-info btn-simple" data-original-title="" title="">
                                          <i class="material-icons">person</i>
                                      <div class="ripple-container"></div></button> -->
                                      <a  href="?controller=nhacungcap&act=chitiet_nhacungcap&id=<?=$item->id_nhacungcap;?>" class="btn btn-success btn-simple" >
                                          <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div></a>
                                      <a  href="?controller=nhacungcap&act=dell_nhacungcap&id=<?=$item->id_nhacungcap;?>" class="btn btn-danger btn-simple" >
                                          <i class="material-icons">close</i>
                                      </a>
                                  </td>
                              </tr>
                              <?php
                                      }
                              ?>

                          
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
        <!-- </div> -->
        <!-- end col-md-12 -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <!-- <a href="?controller=nhacungcap&act=add_nhacungcap_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a> -->
                <div class="card-content">
                    <h4 class="card-title">Sản Phẩm</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                    <select  id="idnhacungcap"  class="selectpicker" name="idnhacungcap"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                        <option class="bs-title-option" value="">Single Select</option>
                        <option  disabled="" selected="">Chọn nhà cung cấp</option>
                        <?php
                            foreach(@$data['nhacungcap'] as $k=>$v)
                            {
                        ?>
                        <option   value="<?php echo @$v->id_nhacungcap ?>" >
                            <?php echo @$v->ten_nhacungcap ?>
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
    $('#idnhacungcap').change(function(){
    $.ajax({
        url: "http://localhost/laptopbaongoc_mvc/?controller=nhacungcap&act=api_danhsach_sanpham_nhacungcap_id",
        data: { "idnhacungcap": $("#idnhacungcap").val() },
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
