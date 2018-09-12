<?php 
class loaikhachhang_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/loaikhachhang/';
    }
    function danhsach_loaikhachhang()
    {
        $sr=new loaikhachhang_model();
        $data=array('danhsachloaikhachhang'=>$sr->danhsach_loaikhachhang_model());
        $this->render('loaikhachhang',$data,'layout');
        
    }
    function api_khachhang_loaikhachhang_id()
    {
        $sr=new loaikhachhang_model();
        $data=array('khachhang'=>$sr->api_danhsach_khachhang_loaikhachhang_id_model($_POST['idkhachhang']));
        //   xem_arr($data);
        // exit();
        foreach($data['khachhang'] as $item)
        {
            echo 
            '<tr>
            <td class="text-center sorting" tabindex="0">
                '.$item->id_khachhang.'
            </td>
            <td class="text-center sorting" tabindex="0">
                '.$item->ten_khachhang.'
            </td>
            <td class="text-center sorting">
                '.$item->email.'
            </td>
            <td class="text-center sorting">
                '.$item->sodienthoai.'
            </td>
            <td class="text-center sorting">
                '.$item->ngaytao.'
            </td>
            <td class="text-center sorting">
                '.$item->ten_trangthai.'
            </td>
            <td class="td-actions text-center">
                <a href="?controller=khachhang&act=chitiet_khachhang&id='.$item->id_khachhang.'" >	
                    <i class="material-icons">edit</i>
                <div class="ripple-container"></div></a>
            
                <a href="?controller=khachhang&act=delete_khachhang&id='.$item->id_khachhang.'" >
                    <i class="material-icons">close</i>
                <div class="ripple-container"></div></a>
            </td>
            </tr>
            ';
        }

    }
    function chitiet_loaikhachhang()
    {
        $sr=new loaikhachhang_model();
        $data=array('chitietloaikhachhang'=>$sr->chitiet_loaikhachhang_id_model($_GET['idkhachhang']),
                     'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('loaikhachhang_detail',$data,'layout');
    }
    function update_loaikhachhang()
    {
        $post=$_POST;
		$m=substr($post['ngaytao'],0,2);
		$d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
        $post['ngaytao']="$y-$m-$d $h:$mm";
        $m=substr($post['ngaycapnhatcuoi'],0,2);
		$d=substr($post['ngaycapnhatcuoi'],3,2);
        $y=substr($post['ngaycapnhatcuoi'],6,4);
        $h=substr($post['ngaycapnhatcuoi'],11,2);
        $mm=substr($post['ngaycapnhatcuoi'],14,2);
        $post['ngaycapnhatcuoi']="$y-$m-$d $h:$mm";
        $sr1=new loaikhachhang_model();
        $sr1->update_loaikhachhang_id_model($post['ten_loaikhachhang'],$post['ghichu'],$post['ngaytao'] ,
                                         $post['id_trangthai'] ,$post['ngaycapnhatcuoi'],$post['id_loaikhachhang']);
        header('location:?controller=loaikhachhang&act=danhsach_loaikhachhang');
       
       
    }
    function add_loaikhachhang_view()
    {
        $sr=new loaikhachhang_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai());
        $this->render('loaikhachhang_add',$data,'layout');

    }
    function add_loaikhachhang()
    {
       
        $post=$_POST;
        $m=substr($post['ngaytao'],0,2);
        $d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
        $post['ngaytao']="$y-$m-$d $h:$mm";
        $m=substr($post['ngaycapnhatcuoi'],0,2);
        $d=substr($post['ngaycapnhatcuoi'],3,2);
        $y=substr($post['ngaycapnhatcuoi'],6,4);
        $h=substr($post['ngaycapnhatcuoi'],11,2);
        $mm=substr($post['ngaycapnhatcuoi'],14,2);
        $post['ngaycapnhatcuoi']="$y-$m-$d $h:$mm";
        xem_arr($post);
        $sr=new loaikhachhang_model();
        $t=$sr->add_loaikhachhang_model(NuLL,$post['ten_loaikhachhang'],$post['ghichu'],$post['ngaytao'],$post['id_trangthai'], $post['ngaycapnhatcuoi']);
        header('location:?controller=loaikhachhang&act=danhsach_loaikhachhang');

    }
    function dell_loaikhachhang()
    {
        $sr=new loaikhachhang_model();
        $t=$sr->dell_loaikhachhang_model($_GET['id']);
        header('location:?controller=loaikhachhang&act=danhsach_loaikhachhang');
    }
  
  





}
?>