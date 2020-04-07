<div id="content-area">
    <?php
    //x is a variable used to store returned pagelink
    $p = $_GET['page'];
    $page="sub/".$p.".php";
    if(file_exists($page)){
        include($page);
    } else if($page==""){
        include ("index.php");
    } else{
        include ("admin/page/404.php");
    }
    ?>

</div>