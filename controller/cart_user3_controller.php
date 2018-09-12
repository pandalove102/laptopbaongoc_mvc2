<?php 
session_start();
class cart_user3_controller extends controller
{
    function __construct()
    {
        $this->pathview = 'view/user3/';
       
		
    }
   
  
    function cart()
    {
        $_SESSION['sl']=$this->countcart();
    	$data = array();
        $this->render('cart',$data,'layout_user3');
    }
  
    function add_cart()
    {
        
         // lấy mã sản phẩm từ API gởi về có không ?
        if(isset($_GET['id']) && $_GET['id'])
        {
            $id_sanpham=$_GET['id'];
            $sr=new sanpham_model();
            $sp=$sr->chitiet_sanpham_model($id_sanpham);
             // kiểm tra sản phẩm hợp lệ hay không ?
            
            if($sp && $sp->soluong>0)
            {
                 // kiểm tra sản phẩm có trong giỏ hay chưa 
                if(!isset($_SESSION['cart'][$sp->id_sanpham]))
                {
                    // thêm sản phảm vào giỏ hàng  , sl=1
                    $sanphammua=array(
                        'id_sanpham'=>$sp->id_sanpham,
                        'ten_sanpham'=>$sp->ten_sanpham,
                        'hinhdaidiensanpham'=>$sp->hinhdaidiensanpham,
                        'gia'=>$sp->gia,
                        'soluong'=>1
                    );
                    $_SESSION['sl']=$this->countcart();
                    $_SESSION['cart'][$sp->id_sanpham] = $sanphammua;
                    $this->render('cart',$data=array(),'layout_user3');
                    // header('location:?controller=user3&act=cart');
                  
                }else
                {
                    // update số lương sản phẩm +1
                    $_SESSION['sl']=$this->countcart();
                    $_SESSION['cart'][$sp->id_sanpham]['soluong']+=1;
                    $this->render('cart',$data=array(),'layout_user3');  
                }
                
            }else
            {
                $_SESSION['sl']=$this->countcart();
               // nếu sai ko hợp lệ hoac hết hàng thì trả về False
               header('location:?controller=user3&act=trangchu');  
            }

        }else
        {
            $_SESSION['sl']=$this->countcart();
            // nếu không hợp lệ hoac không có thì return False
            header('location:?controller=user3&act=trangchu');  
        }

    }
    function dell_sanpham()
    {
        if(isset($_GET['id']) && $_GET['id'])
        {
            if(isset($_SESSION['cart'][$_GET['id']])){				
				//xoa 
				unset($_SESSION['cart'][$_GET['id']]);
                $_SESSION['sl']=$this->countcart();
                $this->render('cart',$data=array(),'layout_user3'); 			
			}else
			{
                $_SESSION['sl']=$this->countcart();
				return false;
			}

        }else
        {
            //thông báo hoac trả về false
            return false;
        }
    }
    function update_soluong(){
      // lấy mã sản phẩm trên link , kiểm tra số lượng 
          if(isset($_POST['soluong_update']))
          {	
              foreach($_POST['soluong'] as $id_sanpham => $soluong)
                  $_SESSION['cart'][$id_sanpham]['soluong'] = $soluong;
            $data= array();
            $data['sl']=$this->countcart();
            $this->render('cart',$data,'layout_user3'); 
          }else
          {
              // thong bao hoăc tra ve false
                    $_SESSION['sl']=$this->countcart();
                    $this->render('home1',$data,'layout_user3'); 
              
          }
     
     

    }
    function countcart()
	{
		if(isset($_SESSION['cart']))
			return count($_SESSION['cart']);
		return 0;
	}





}
?>