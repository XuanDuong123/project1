<?php
   function themsp($iddm,$tensp,$gia,$img){
   $conn=connectdb();
   $sql = "INSERT INTO tbl_sanpham (iddm,tensp,giasp,img)
   VALUES ('".$iddm."','".$tensp."','".$gia."','".$img."')";
//use exec() because no results are returned
    $conn->exec($sql);
 }

  function updatesp($id,$tensp,$gia,$img,$iddm) {
     $conn=connectdb();
     if($img=="") {
      $sql = "UPDATE tbl_sanpham SET tensp='".$tensp."',giasp='".$gia."',iddm='".$iddm."' WHERE id=".$id;
      }else{
        $sql = "UPDATE tbl_sanpham SET tensp='".$tensp."',giasp='".$gia."',iddm='".$iddm."',img='".$img."' WHERE id=".$id;
     }
// //     // Prepare statement
     $stmt = $conn->prepare($sql);
  
// //     // execute the query
   $stmt->execute();

 }

 function  getonesp($id) {
     $conn=connectdb();
      $stmt = $conn->prepare("SELECT * FROM tbl_sanpham WHERE id=".$id);
      $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $kq=$stmt->fetchAll();
    return $kq;
  }

//  function delsp($id) {
//     $conn=connectdb();
// //      // sql to delete a record
//    $sql = "DELETE FROM tbl_sanpham WHERE id=".$id;

// //   // use exec() because no results are returned
//   $conn->exec($sql);
//  }

 function getall_sanpham($iddm=0,$kyw="",$limit = ""){
    $conn=connectdb();
    $sql="SELECT * FROM tbl_sanpham WHERE 1";
    if($iddm>0) $sql.=" AND iddm=".$iddm;
    if($kyw!="") $sql.=" AND tensp like '%".$kyw."%'";
    $sql .= " ORDER BY iddm, id DESC";

    if (!empty($limit) && is_numeric($limit)) {
        $sql = "
            SELECT * FROM (
                SELECT *, ROW_NUMBER() OVER (PARTITION BY iddm ORDER BY id DESC) AS row_num
                FROM tbl_sanpham
                WHERE 1 " . ($kyw != "" ? " AND tensp LIKE :kyw" : "") . "
            ) AS ranked
            WHERE row_num <= " . intval($limit) . "
            ORDER BY iddm, id DESC
        ";
    }
     $stmt = $conn->prepare($sql);
     $stmt->execute();
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
     $kq=$stmt->fetchAll();
    return $kq;
 }

function showspdetail($id){
  $conn=connectdb();
  $sql= "SELECT * FROM tbl_sanpham WHERE 1";
  if($id>0) $sql.=" AND id=".$id;
  $stmt = $conn->prepare($sql);
  $stmt->execute();
  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  $kq=$stmt->fetch();
  return $kq;
}
 ?>