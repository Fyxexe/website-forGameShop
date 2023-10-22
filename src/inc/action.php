<?php include 'db.php';
function select($table,$id=NULL){
    global $db;
    if ($id != NULL) {
        $sql = "SELECT * FROM `$table` WHERE id=$id";
        $result = mysqli_query($db,$sql);
        return mysqli_fetch_object($result);
    }
    else{
        $sql = "SELECT * FROM `$table`";
        return mysqli_query($db,$sql);
    }
 }
 
?>