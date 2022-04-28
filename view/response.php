<div class="container">
<?php 
if($sikeres){
    echo '<p> Siekres regisztráció!</p>';
}else{
    foreach($errors as $error){
        echo '<p>'.$error.'</p>';
    }
}
?>
<a href="index.php?page=regForm"><button class="btn btn-primary">Vissza</button></a>
</div>