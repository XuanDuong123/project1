<?php
function taodonhang($madh,$tongdonhang,$pttt,$hoten,$address,$email,$tel){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_order (madh,tongdonhang,pttt,hoten,address,email,tel)
    VALUES ('".$madh."','".$tongdonhang."','".$pttt."','".$hoten."','".$address."','".$email."','".$tel."')";
 //use exec() because no results are returned
     $conn->exec($sql);
     $last_id = $conn->lastInsertId();
     return $last_id;
}
function  addtocart($iddh,$idpro,$tensp,$img,$size,$sl,$dongia){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_cart (iddh,idpro,tensp,img,size,soluong,dongia)
    VALUES ('".$iddh."','".$idpro."','".$tensp."','".$img."','".$size."','".$sl."','".$dongia."')";
 //use exec() because no results are returned
     $conn->exec($sql);
     
}
function getshowcart($iddh){
    $conn=connectdb();
     $stmt = $conn->prepare("SELECT * FROM tbl_cart WHERE iddh=".$iddh);
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $kq=$stmt->fetchAll();
     return $kq;
 }
function getorderinfo($iddh){
    $conn=connectdb();
     $stmt = $conn->prepare("SELECT * FROM tbl_order WHERE id=".$iddh);
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $kq=$stmt->fetchAll();
     return $kq;
 }
 function getall_dh(){
    $conn=connectdb();
     $stmt = $conn->prepare("SELECT * FROM tbl_order");
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $kq=$stmt->fetchAll();
     return $kq;
 }
 function getshowprint(){
    $conn=connectdb();
     $stmt = $conn->prepare("SELECT tbl_order.hoten, tbl_order.address,tbl_order.email,tbl_order.tel, tbl_cart.*,
     tbl_sanpham.iddm FROM tbl_order INNER JOIN tbl_cart ON tbl_order.id=tbl_cart.iddh INNER JOIN tbl_sanpham ON tbl_sanpham.id=tbl_cart.idpro 
     WHERE tbl_order.id =".$_GET['id']);
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $kq=$stmt->fetchAll();
     return $kq;
 }
?>