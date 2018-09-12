<?php
class hoadon_model extends model
{
        //SELECT table_hoadon.*,table_trangthai.ten_trangthai,table_quantri.ten_quantri,table_khachhang.ten_khachhang  FROM table_hoadon,table_trangthai,table_khachhang,table_quantri WHERE table_hoadon.trangthai=table_trangthai.id_trangthai and table_hoadon.id_makhachhang=table_khachhang.id_khachhang and table_hoadon.id_manhanvien=table_quantri.id_quantri

        //SELECT table_hoadon.*,table_trangthai.ten_trangthai,table_quantri.ten_quantri,table_khachhang.ten_khachhang  FROM table_hoadon,table_trangthai,table_khachhang,table_quantri WHERE table_hoadon.trangthai=table_trangthai.id_trangthai and table_hoadon.id_makhachhang=table_khachhang.id_khachhang and table_hoadon.id_manhanvien=table_quantri.id_quantri and id_hoadon=3

        // UPDATE table_hoadon SET
        // `id_makhachhang`=3,
        // `id_manhanvien`=3,
        // `ngaytao`='2017-05-20',
        // `magiamgia`='giam gia 200k abccccccc',
        // `trangthai`=5,
        // `ngaycapnhatcuoicung`='2018-05-20'
        // WHERE  `id_hoadon`=3

        // INSERT INTO table_hoadon(`id_hoadon`,`id_makhachhang`,`id_manhanvien`,`ngaytao`,`magiamgia`,`trangthai`,`ngaycapnhatcuoicung`)VALUES(Null,3,2,'2017-05-20','giam gia 200k BH200',5,'2018-05-20') 
    function danhsach_hoadon_model()
    {
        $this->setquery("SELECT table_hoadon.* , table_trangthai.ten_trangthai, table_khachhang.ten_khachhang , table_quantri.ten_quantri
        FROM table_hoadon, table_trangthai, table_khachhang, table_quantri
        WHERE table_trangthai.id_trangthai=table_hoadon.trangthai	 
        and table_khachhang.id_khachhang= table_hoadon.id_makhachhang
		and table_hoadon.id_manhanvien=table_quantri.id_quantri");
        return $this->loadallrow();
    }
    function chitiet_hoadon_id_model($id)
    {
        $this->setquery("SELECT table_hoadon.* , table_trangthai.ten_trangthai, table_khachhang.ten_khachhang , table_quantri.ten_quantri
        FROM table_hoadon, table_trangthai, table_khachhang, table_quantri
        WHERE table_trangthai.id_trangthai=table_hoadon.trangthai	 
        and table_khachhang.id_khachhang= table_hoadon.id_makhachhang
		and table_hoadon.id_manhanvien=table_quantri.id_quantri and id_hoadon=?");
        return $this->loadrow(array($id));

    }
    function api_danhsach_hoadon_chitiethoadon_id_model($id)
    {
        $this->setquery("SELECT table_hoadon.* , table_trangthai.ten_trangthai, table_khachhang.ten_khachhang , table_quantri.ten_quantri
        FROM table_hoadon, table_trangthai, table_khachhang, table_quantri
        WHERE table_trangthai.id_trangthai=table_hoadon.trangthai	 
        and table_khachhang.id_khachhang= table_hoadon.id_makhachhang
		and table_hoadon.id_manhanvien=table_quantri.id_quantri and id_hoadon=$id");
        return $this->loadrow(array($id));

    }
       

}
?>
 

