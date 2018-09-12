
<?php
//  xem_arr($data['nhombaiviet']);
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div>
                <a href="?controller=nhombaiviet&act=add_nhombaiviet_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a>
                <div class="card-content">
                    <h4 class="card-title">Nhóm Bài Viết</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      
                      <div class="row">
                      <div class="col-sm-12">
                            <table id="datatables" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            <tr>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Nhóm Bài Viết</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Nội Dung</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Cập Nhật Cuối</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php
                              foreach($data['nhombaiviet'] as $item)
                              {
                          ?>       
                          <tr role="row" class="odd">
                                  <td class="text-center sorting" tabindex="0"><?=$item->id_nhombaiviet;?></td>
                                  <td class="text-center sorting" tabindex="0"><?=$item->ten_nhombaiviet;?></td>
                                  <td class="text-center sorting"><?=$item->noidung?></td>
                                  <td class="text-center sorting"><?=$item->ngaytao?></td>
                                  <td class="text-center sorting"><?=$item->capnhatcuoicung?></td>
                                  <td class="text-center sorting"><?=$item->ten_trangthai?></td>
                                  <td class="td-actions text-center">
                                     
                                      <a href="?controller=nhombaiviet&act=chitiet_nhombaiviet&id=<?=$item->id_nhombaiviet;?>" class="btn btn-success btn-simple" >
                                          <i class="material-icons">edit</i>
                                      <div class="ripple-container"></div></a>
                                      <a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="?controller=nhombaiviet&act=dell_nhombaiviet&id=<?=$item->id_nhombaiviet;?>" class="btn btn-danger btn-simple" >
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
                <!-- <div class="card-header card-header-icon" data-background-color="purple">
                    <i class="material-icons">assignment</i>
                </div> -->
                <a href="?controller=nhombaiviet&act=add_nhombaiviet_view">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">library_books</i>
                </div></a>
                <div class="card-content">
                    <h4 class="card-title"> Bài Viết</h4>
                    <div class="toolbar">
                        <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                        <select  id="nhombaiviet"  class="selectpicker" name="idnhombaiviet"  data-style="btn btn-primary btn-round" style="border-radius: 4px" title="Single Select" data-size="7" tabindex="-98">
                            <option class="bs-title-option" value="">Single Select</option>
                            <option  disabled="" selected="">Chọn Nhóm Bài Viết</option>
                            <?php
                                foreach($data['nhombaiviet'] as $k=>$v)
                                {
                            ?>
                            <option   value="<?php echo @$v->id_nhombaiviet ?>" >
                                <?php echo @$v->ten_nhombaiviet ?>
                            </option>
                            <?php
                                }
                            ?>
                        </select>
                      <div class="row">
                      <div class="col-sm-12">
                        <table id="datatables1" class="table table-striped table-no-bordered table-hover dataTable dtr-inline" cellspacing="0" width="100%" style="width: 100%;" role="grid" aria-describedby="datatables_info">
                          <thead>
                            <tr>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 80px;font-family: initial;" aria-label="Position: activate to sort column ascending">ID</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Bài Viết</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Position: activate to sort column ascending">Alias</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Office: activate to sort column ascending">Ngày Tạo</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Age: activate to sort column ascending">Ngày Cập Nhật Cuối</th>
                              <th class="text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 133px;font-family: initial;" aria-label="Date: activate to sort column ascending">Trạng Thái</th>
                              <th class="disabled-sorting text-center sorting" tabindex="0" aria-controls="datatables" rowspan="1" colspan="1" style="width: 143px;font-family: initial;" aria-label="Actions: activate to sort column ascending">Actions</th>
                          </tr>
                          </thead>
                          <tbody role="row" class="odd" id="kq">
                                    
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
<!-- <script type="text/javascript">
    $(document).ready(function() {
        $('#datatables1').DataTable({
            "pagingType": "full_numbers",
            "lengthMenu": [
                [10, 25, 50, -1],
                [10, 25, 50, "All"]
            ],
            responsive: true,
            language: {
                search: "_INPUT_",
                searchPlaceholder: "Search records",
            }

        });


        var table = $('#datatables1').DataTable();

        // Edit record
        table.on('click', '.edit', function() {
            $tr = $(this).closest('tr');

            if ($tr.hasClass('child')) {
                $tr = $tr.prev('.parent');
            }

            var data = table.row($tr).data();
            alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
        });

        // Delete a record
        table.on('click', '.remove', function(e) {
            $tr = $(this).closest('tr');
            table.row($tr).remove().draw();
            e.preventDefault();
        });

        //Like record
        table.on('click', '.like', function() {
            alert('You clicked on Like button');
        });
    });
</script> -->

<script>
    $(function(){
    $('#nhombaiviet').change(function(){
    $.ajax({
        url: "http://localhost/laptopbaongoc_mvc/?controller=nhombaiviet&act=api_nhombaiviet_baiviet",
        data: { "idnhombaiviet": $("#nhombaiviet").val() },
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