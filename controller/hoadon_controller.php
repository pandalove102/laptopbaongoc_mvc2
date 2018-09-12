<?php 
class hoadon_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/hoadon/';
    }
    function danhsach_hoadon()
    {
        $sr=new hoadon_model();
        $data=array('danhsachhoadon'=>$sr->danhsach_hoadon_model());
        $this->render('hoadon',$data,'layout');
    }
    function api_danhsach_hoadon_chitiethoadon_id()
    {
        $sr=new hoadon_model();
        $data=array('danhsachhoadon'=>$sr->danhsach_hoadon_model());
        
        // API 
    }
    function chitiet_hoadon()
    {
        $sr=new hoadon_model();
        $sr1=new quantri_model();
        $data=array('chitiet_hoadon'=>$sr->chitiet_hoadon_id_model($_GET['id']),
                    'load_danhsach_nhanvien'=>$sr->load_danhsach_trangthai());
        $this->render('hoadon_detail',$data,'layout');
    }
    function update_hoadon()
    {
        
    }
    function add_hoadon_view()
    {
        
    }
    function add_hoadon()
    {
        
    }
    function dell_hoadon()
    {
        // $sr=new 
    }





}
?>