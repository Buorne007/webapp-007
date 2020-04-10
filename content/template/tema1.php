<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html">
    <link rel="stylesheet" type="text/css" href="content/Stylesheet/tema1.css">

    <title>
        <?php /*dynamic get & place title here*/
            echo $title;
        ?>
    </title>
    <!-- load header here -->
    <?php include ("admin/section/header.php")?>
</head>

<body>
<div id="wrapper" class="wrapper">
    <!-- load page contents -->
    <?php require "admin/section/content-area.php";?>
        <!-- load sidebar -->
        <?php require"admin/section/sidebar.php";?>
            <!-- load sidebar -->
            <?php require "admin/section/footer.php";?>
</div>
</body>

</html>
