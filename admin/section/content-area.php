<div id="content-area" class="left content-area">
    <?php
    //p is a variable used to store returned pagelink
    if(isset($_GET['page'])){
        $p = $_GET['page'];
        $page="admin/page/".$p.".php";
            if(file_exists($page)){
                include($page);
            } else if($p==""){
                include ("admin/page/home.php");
            } else{
                include("admin/page/Status.php");
            }
    } else{
        include ("admin/page/home.php");
    }



    ?>
</div>
