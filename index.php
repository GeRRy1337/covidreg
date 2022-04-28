<?php
require "includes/db.inc.php";

include "includes/htmlheader.php";
include "includes/menu.inc.php";

include "model/regisztracio.php"; 

$page="regisztraciok";
if(isset($_REQUEST['page'])){
    if(file_exists("controller/".$_REQUEST['page'].".php")){
        $page=$_REQUEST['page'];
    }   
}
?>
<body>
    <?php
        include "controller/".$page.".php";
    ?>
</body>
<?php
$conn->close();
?>
</html>