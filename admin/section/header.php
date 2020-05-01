<?php
    $logo_main= 'content/upload/images/Reply_cv1.jpg';
   // $logo_icon= 'content/upload/images/Reply_run.jpg';

?>

<div  id="header" class="header container sticky">
<!--
    <div id="logo-icon" class="logo-icon">
        <img alt="Logo icon" src=<?php echo $logo_icon ?> >
    </div>
-->
    <div id="logo-main" class="logo-main logo-center logo-left logo-right">
        <a href="?page=">
        <img alt="Logo" src=<?php echo $logo_main?> >
        </a>
    </div>

    <!-- comment to enable menu in header // -->
    <?php require "admin/section/menu-head.php"; ?>

</div>