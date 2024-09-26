
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./font/fontawesome-free-6.4.2/css/all.min.css">
    <link rel="stylesheet" href="./style.css">
    <title>Document</title>
</head>
<body>
<div class="sidebar">
    <?php
    include "sidebar.php";
    ?>

    </div>
<div class="main--content">
    <?php
    session_start();
    ob_start();
    if(isset($_SESSION['role'])&&($_SESSION['role']==1)){
        include "../model/connectdb.php";
        include "../model/danhmuc.php";
        include "../model/sanpham.php";
        include "../model/donhang.php";
        require '../phpexcel/vendor/autoload.php';  // Nếu bạn không sử dụng autoloading, hãy import các class cần thiết.
      //    connectdb();
          include "header.php";
          ?>
          
          <div class="card-container">
              <?php
              if(isset($_GET['act'])){
                  switch($_GET['act']) {
                      case 'addsp':
                          if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                              $tensp=$_POST['tensp'];
                              $iddm =$_POST['iddm'];
                              $gia=$_POST['giasp'];
      
                              //lưu đường dẫn hình ảnh vào database
                              //upload hình ảnh lên host
                              $target_dir = "../uploads/";
                              $target_file = $target_dir . basename($_FILES["image"]["name"]);
                              $img= $target_file;
                              $uploadOk = 1;
                              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
                              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                              && $imageFileType != "gif" ) {
                              //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                               $uploadOk = 0;
                              }
      
                              move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
      
                              themsp($iddm,$tensp,$gia,$img);
      
                          }
                          $dsdm=getall_dm();
                          //dssp để load table
                         $kq=getall_sanpham();
                         include "sanpham.php";
                         break;
      
                          $kq=getall_dm();
                          include "danhmuc.php";
                          break;
      
                      case 'danhmuc':
                          $kq=getall_dm();
                      include "danhmuc.php";
                      break;
                      case 'adddm':
                          if (isset($_POST['themmoi'])&&($_POST['themmoi'])) {
                              $tendm=$_POST['tendm'];
                              themdm($tendm);
      
                          }
                          $kq=getall_dm();
                          include "danhmuc.php";
                          break;
      
                      case 'deldm':
                          if(isset($_GET['id'])) {
                              $id = $_GET['id'];
                              deldm($id);
                          }
                          $kq=getall_dm();
                          include "danhmuc.php";
                          break;
                          
                          case 'updatedmform':
                              //Lấy 1 record đúng với id truyền vào
                              if(isset($_GET['id'])) {
                                  $id = $_GET['id'];
                                 $kqone= getonedm($id);
                                 $kq=getall_dm();
                                 include "updatedmform.php";
                              }
                              if(isset($_POST['id'])) {
                                  $id = $_POST['id'];
                                  $tendm = $_POST['tendm'];
                                 updatedm($id,$tendm);
                                 //cần danh sách danh mục
                                 $kq=getall_dm();
                                 include "danhmuc.php";
                        
                              }
                              break;
                                case 'sanpham':
                                  //dsdm để load vào slect box
                                   $dsdm=getall_dm();
                                   //dssp để load table
                                  $kq=getall_sanpham();
                                include "sanpham.php";
                               break;
      
                               case 'updatespform':
                                  //lấy danh sách sản phẩm
                                  $dsdm=getall_dm();
                                   //cần sản phẩm chi tiết
                                   if(isset($_GET['id'])&&($_GET['id']>0)){
                                       $spct=getonesp($_GET['id']);
                                  }
                                   $kq=getall_sanpham();
                                  include "updatespform.php";
                                  break;
                     
                                case 'sanpham_update':
                                   $dsdm=getall_dm();
                                  //cập nhật
                                   if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                                          $iddm=$_POST['iddm'];
                                          $tensp=$_POST['tensp'];
                                          $gia=$_POST['giasp'];
                                          $id=$_POST['id'];
                                          
      
                                      if($_FILES["image"]["name"]!=""){
                                          $target_dir = "../uploads/";
                                       $target_file = $target_dir . basename($_FILES["image"]["name"]);
                                      $img= $target_file;
                                    $uploadOk = 1;
                                    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
      
                              if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                              && $imageFileType != "gif" ) {
                              //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                               $uploadOk = 0;
                              }
                              if($uploadOk==1){
                                  move_uploaded_file($_FILES["image"]["tmp_name"],$target_file);
                              }         
                                     
                                   }else{
                                      $img="";
      
                                 }
                                  updatesp($id,$tensp,$img,$gia,$iddm);
      
                                      }
                                   $kq=getall_sanpham();
                                   include "sanpham.php";
                                   break;
                     
                              //  case 'sanpham_add':
                              //     // if((isset($_POST['themmoi']))&&($_POST['themmoi'])){
                              //     //     $iddm=$_POST['iddm'];
                              //     //     $tensp=$_POST['tensp'];
                              //     //     $gia=$_POST['giasp'];
      
                              //     //     $target_dir = "../uploaded/";
                              //     //     $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                              //     //     $img=$target_file;
                              //     //     $uploadOk = 1;
                              //     //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                              //     //     // Allow certain file formats
                              //     //     if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                              //     //     && $imageFileType != "gif" ) {
                              //     //      // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                              //     //       $uploadOk = 0;
                              //     //     }
                              //     //     if($uploadOk==1){
      
                              //     //         move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file);
                              //     //         insert_sanpham($iddm,$tensp,$gia,$img);
                              //     //     }
                                  
                              //     // }
                              //     $dsdm=getall_dm();
                              //     $kq=getall_sanpham();
                              //     include "sanpham.php";
                              //     break;
                     
                      
                      case 'taikhoan':
                      include "taikhoan.php";
                      break;
                      
                      case 'donhang':
                        $dh=getall_dh();
                      include "donhang.php";
                      break;
                      case 'print':
                      $order=getshowprint();
                      include "print.php";
                      break;

                      case 'export':
                      $order=getshowprint();
                      include "export.php";
                      break;

                      case 'dangxuat':
                      if(isset($_SESSION['role']))
                      unset($_SESSION['role']);
                      header('location:../index.php');
                      
                      default:
                      include "home.php";
                      break;
                  }
      
              }else{
              include "home.php";
              }
    }else {
        header('location:login.php');
    }

        ?>
    </div>
</div>
    
</body>
</html>