<?php
function  themdm($tendm){
    $conn=connectdb();
    $sql = "INSERT INTO tbl_danhmuc (tendm)
    VALUES ('".$tendm."')";
  // use exec() because no results are returned
   $conn->exec($sql);
}

function updatedm($id,$tendm) {
    $conn=connectdb();
    $sql = "UPDATE tbl_danhmuc SET tendm='".$tendm."' WHERE id=".$id;

    // Prepare statement
    $stmt = $conn->prepare($sql);
  
    // execute the query
    $stmt->execute();

}

function  getonedm($id) {
    $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc WHERE id=".$id);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;

}

function deldm($id) {
    $conn=connectdb();
     // sql to delete a record
  $sql = "DELETE FROM tbl_danhmuc WHERE id=".$id;

  // use exec() because no results are returned
  $conn->exec($sql);
}

function getall_dm(){
   $conn=connectdb();
    $stmt = $conn->prepare("SELECT * FROM tbl_danhmuc");
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetchAll();
    return $kq;
}
function getnamecate($id){
    $sql="select * from tbl_danhmuc where id=".$id;
    $conn=connectdb();
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $kq=$stmt->fetch();
    return $kq;
}
?>