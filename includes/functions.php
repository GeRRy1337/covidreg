<?php
function checkTaj($taj,$conn){
    $stmt=$conn->prepare("Select taj from regisztracio where taj=?");
    $stmt->bind_param("s",$taj);
    $stmt->execute();
    $result=$stmt->get_result();
    if($result->num_rows>0){
        return true;
    }else{
        return false;
    }
}

?>