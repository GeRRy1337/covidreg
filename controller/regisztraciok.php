<?php
$errors=array();
$sikeres=false;
if(isset($_POST['regForm'])){
    if(strlen($_POST['taj'])!=11){
        $errors[]="Hibás tajszám!";
    }elseif(checkTaj($_POST['taj'],$conn)){
        $errors[]="Ez a taj már regisztrálva van!";
    }
    if( date_diff( date_create($_POST['szul']),date_create("now"))->y<14 ){
        $errors[]= "A jelentkezéshez legalább 14 évesnek kell lenned!";
    }
    if(count($errors)==0){
        $stmt=$conn->prepare("Insert into regisztracio(taj,nev,email,szuletes,vakcina,megjegyzes) Values(?,?,?,?,?,?)");
        $stmt->bind_param("ssssss",$taj,$nev,$email,$szuletes,$vakcina,$megjegyzes);
        $taj=$_POST['taj'];
        $nev=$_POST['nev'];
        $email=$_POST['email'];
        $szuletes=$_POST['szul'];
        $vakcina=$_POST['vakcina'];
        $megjegyzes=(isset($_POST['megjegyzes'])?$_POST['megjegyzes']:"");
        if($stmt->execute()){
            $sikeres=true;
        }
    }
    include "view/response.php";
    exit();
}

include "view/regForm.php";

?>