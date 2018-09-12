<?php 
class nhomsanpham_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/nhomsanpham/';
    }
    function danhsach_nhomsanpham()
    {
        $sr=new nhomsanpham_model();
        $data=array('danhsach_nhomsp'=>$sr->danhsach_nhomsanpham_model());
        $this->render('nhomsanpham',$data,'layout');
    }
    function api_danhsach_sanpham_nhomsanpham_id()
    {
        $sr=new nhomsanpham_model();
        $data=array('sanpham'=>$sr->api_danhsach_sanpham_nhomsanpham_id_model($_POST['idnhomsanpham']));
        // xem_arr($data);
        // exit();
        foreach($data['sanpham'] as $item)
        {
            echo 
            '<tr>
            <td class="text-center sorting" tabindex="0">
                '.$item->id_sanpham.'
            </td>
            <td class="text-center sorting" tabindex="0">
                '.$item->ten_sanpham.'
            </td>
            <td class="text-center sorting">
                '.$item->soluong.'
            </td>
            <td class="text-center sorting">
                '.$item->gia.'
            </td>
            <td class="text-center sorting">
                '.$item->ngaytao.'
            </td>
            <td class="text-center sorting">
                '.$item->ten_trangthai.'
            </td>
            <td class="td-actions text-center">
                <a href="?controller=sanpham&act=chitiet_sanpham&id='.$item->id_sanpham.'" >	
                    <i class="material-icons">edit</i>
                <div class="ripple-container"></div></a>
            
                <a href="?controller=sanpham&act=delete_sanpham&id='.$item->id_sanpham.'" >
                    <i class="material-icons">close</i>
                <div class="ripple-container"></div></a>
            </td>
            </tr>
            ';
        }
        
    }
    function danhsach_nhomsanpham_id_danhmuc($id)
    {
        $sr=new nhomsanpham_model();
        $data=array('danhsach_nhomsp'=>$sr->danhsach_nhomsanpham_id_danhmucsanpham_model($id));
        $this->render('nhomsanpham',$data,'layout');
        // return $data;
    }
    function chitiet_nhomsanpham()
    {
        $sr2=new danhmucsanpham_model();
        $sr=new nhomsanpham_model();
        $data=array('chitietnhomsanpham'=>$sr->chitiet_nhomsanpham_id_model($_GET['id']),
                     'load_danhsach_trangthai'=>$sr->load_danhsach_trangthai(),
                     'danhmuc'=>$sr2->danhsach_danhmucsanpham_model());
        $this->render('nhomsanpham_detail',$data,'layout');
    }
    function update_nhomsanpham()
    {
        $post=$_POST;
		$m=substr($post['ngaytao'],0,2);
		$d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
        $post['ngaytao']="$y-$m-$d $h:$mm";
        $m=substr($post['capnhatcuoicung'],0,2);
		$d=substr($post['capnhatcuoicung'],3,2);
        $y=substr($post['capnhatcuoicung'],6,4);
        $h=substr($post['capnhatcuoicung'],11,2);
        $mm=substr($post['capnhatcuoicung'],14,2);
        $post['capnhatcuoicung']="$y-$m-$d $h:$mm";
        $sr1=new nhomsanpham_model();
        //  xem_arr($post);
        //  exit();$id_danhmucsanpham,$ten_nhomsanpham,$alias,$tukhoa,$mota,$timkiem,$chiase,$ngaytao,$trangthai,$capnhatcuoicung,$id_nhomsanpham
        $t=$sr1->update_nhomsanpham_id_model($post['id_danhmucsanpham'],$post['ten_nhomsanpham'],$post['alias'] ,$post['tukhoa'] ,$post['mota'] ,
                                         $post['timkiem'] ,$post['chiase'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung'],$_GET['id']);
        // if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
         header('location:?controller=nhomsanpham&act=danhsach_nhomsanpham');
     
       
    }
    function add_nhomsanpham_view()
    {
        $sr=new nhomsanpham_model();
        $sr2=new danhmucsanpham_model();
        $data=array('load_danhsach_trangthai'=>$sr->load_danhsach_trangthai(),
                    'danhmuc'=>$sr2->danhsach_danhmucsanpham_model());
        $this->render('nhomsanpham_add',$data,'layout');

    }
    function add_nhomsanpham()
    {
       
        $post=$_POST;
        $m=substr($post['ngaytao'],0,2);
        $d=substr($post['ngaytao'],3,2);
        $y=substr($post['ngaytao'],6,4);
        $h=substr($post['ngaytao'],11,2);
        $mm=substr($post['ngaytao'],14,2);
        $post['ngaytao']="$y-$m-$d $h:$mm";
        $m=substr($post['capnhatcuoicung'],0,2);
        $d=substr($post['capnhatcuoicung'],3,2);
        $y=substr($post['capnhatcuoicung'],6,4);
        $h=substr($post['capnhatcuoicung'],11,2);
        $mm=substr($post['capnhatcuoicung'],14,2);
        $post['capnhatcuoicung']="$y-$m-$d $h:$mm";
        xem_arr($post);
        $sr=new nhomsanpham_model();
        $t=$sr->add_nhomsanpham_model(Null,$post['id_danhmucsanpham'],$post['ten_nhomsanpham'],$post['alias'] ,$post['tukhoa'] ,$post['mota'] ,$post['timkiem'] ,
        $post['chiase'],$post['ngaytao'],$post['id_trangthai'],$post['capnhatcuoicung']);
        //   if($t==true)
        // {
        //     echo "ok";
        // }else echo "loi";
        header('location:?controller=nhomsanpham&act=danhsach_nhomsanpham');

    }
    function dell_nhomsanpham()
    {
        $sr=new nhomsanpham_model();
        $t=$sr->dell_nhomsanpham_model($_GET['id']);
        header('location:?controller=nhomsanpham&act=danhsach_nhomsanpham');
    }
  





}
?>