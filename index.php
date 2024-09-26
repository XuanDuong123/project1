
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/delivery.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <title>Document</title>
</head>
<body>
<section class="app">
   <?php
   session_start();
   ob_start();
   if(!isset($_SESSION['giohang'])) $_SESSION['giohang']=[];
   include "model/connectdb.php";
   include "model/danhmuc.php";
   include "model/user.php";
   include "model/sanpham.php";
   include "model/donhang.php";
   $dsdm =getall_dm();
   $sphome1 = getall_sanpham(0, "",3);
   include "header.php";
   if (isset($_GET['act'])) {
   switch ($_GET['act']) {
    case 'main':
        include "main.php";
        break;
   case 'dangnhap':
    include "dangnhap.php";
    break;
   case 'dangky':
    include "dangky.php";
    break;
    case 'thoat':
        unset($_SESSION['role']);
        unset($_SESSION['iduser']);
        unset($_SESSION['username']);
        header('location:index.php');
        break;
    case 'login':
        if(isset($_POST['login'])&&($_POST['login'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];      
                $kq=getuserinfo($user,$pass);
                $role=$kq[0]['role'];
               if($role==1){
                  $_SESSION['role']=$role;
                  header('location:admin/index.php');
               }else{
                $_SESSION['role']=$role;
                $_SESSION['iduser']=$kq[0]['id'];
                $_SESSION['username']=$kq[0]['user'];
                header('location:index.php');
                break;
            }
        }

        case 'category':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                $iddm=$_GET['id'];
                $catename=getnamecate($iddm);
            }else{
                $iddm=0;
                $catename="";
            }
            $dssp=getall_sanpham($iddm , "");
          
            include "category.php";
            break;
        case 'product':
            if (isset($_GET['id'])&&($_GET['id']>0)) {
                 $id=$_GET['id'];
                $kq= getonesp($id);
            }
            
            include "product.php";
            break;
         
            case 'addcart':
                // Lấy dữ liệu từ form để lưu vào giỏ
                if (isset($_POST['addtocart']) && ($_POST['addtocart'])) {
                    $id = $_POST['id'];
                    $tensp = $_POST['tensp'];
                    $img = $_POST['img'];
                    $gia = $_POST['giasp'];
                    $size = $_POST['size'];
                    $soluong = isset($_POST['sl']) && ($_POST['sl'] > 0) ? $_POST['sl'] : 1;
            
                    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
                    $found = false;
                    foreach ($_SESSION['giohang'] as $key => $item) {
                        if ($item[0] == $id && $item[3] == $size) {
                            $soluong_new = $soluong + $item[4];
                            $_SESSION['giohang'][$key][4] = $soluong_new;
                            $found = true;
                            break;
                        }
                    }
            
                    // Nếu sản phẩm chưa có trong giỏ hàng, thêm vào giỏ hàng
                    if (!$found) {
                        $item = array($id, $tensp, $img, $size, $soluong, $gia);
                        $_SESSION['giohang'][] = $item;
                    }
                }
            
                header('Location: viewcart.php');
                exit();
                //break;
            
            //view giỏ hàng lên
              // include "viewcart.php";
              // break;

              case 'delcart':
                if(isset($_GET['i'])&&($_GET['i']>0)){
                    if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0))
                      array_splice( $_SESSION['giohang'],$_GET['i'],1);
                }else{
                    if(isset($_SESSION['giohang'])) unset($_SESSION['giohang']);
                }
                 if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){
                    header('location: index.php?act=viewcart');
                 }else {
                        header('location: index.php');
                       
                    }
                 break;

                case 'delivery':
                    include "delivery.php";
                    break;
                case 'thanhtoan':
                    if((isset($_POST['thanhtoan']))&&($_POST['thanhtoan'])){
                        //lấy dữ liệu
                        $tongdonhang=$_POST['tongdonhang'];
                        $hoten=$_POST['hoten'];
                        $email=$_POST['email'];
                        $tel=$_POST['tel'];
                        $address=$_POST['address'];
                        $pttt=$_POST['pttt'];
                        $madh="HR".rand(0,999999);
                        //tạo đơn hàng
                        //và trả về một id đơn hàng
                        $iddh=taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tel);
                        $_SESSION['iddh']=$iddh;
                        if(isset($_SESSION['giohang'])&&(count($_SESSION['giohang'])>0)){

                        
                        foreach($_SESSION['giohang'] as $item){
                            //$item = array($id, $tensp, $img, $size, $sl, $gia);
                            addtocart($iddh,$item[0],$item[1],$item[2],$item[3],$item[4],$item[5]);

                        }
                        unset($_SESSION['giohang']);
                    }

                    }
                    include "donhang.php";
                    break;
                    case 'donhang':
                        include "donhang.php";
                        break;

         
    default:
     include "main.php";
     break;
    
     }
 }else {
     include "main.php";
 }

  include "footer.php";
   ?>
    


    
</section>
</body>


<script src="./js/index.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
</html>