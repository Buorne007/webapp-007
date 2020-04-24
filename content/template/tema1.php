<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html">
<!--    load stylesheet-->
    <link rel="stylesheet" type="text/css" href="content/Stylesheet/tema1.css">
<!--    load jQuery via CDN-->
    <script src="//code.jquery.com/jquery-3.5.0.slim.min.js" integrity="sha256-MlusDLJIP1GRgLrOflUQtshyP0TwT/RHXsI1wWGnQhs=" crossorigin="anonymous"></script>
<!--    check if jQuery has been loaded via CDN else load from local repo-->
    <script>window.jQuery || document.write('<script src="content/js/jquery-3.5.0.min.js"><\/script>');</script>
<!--    load our global js file-->
    <script src="content/js/global.js"></script>
<title></title>
    <!-- load header here -->
    <?php include ("admin/section/header.php")?>
</head>

<body>
<div id="wrapper" class="wrapper">

    <!-- load sidebar -->
    <?php require"admin/section/sidebar.php";?>

        <!-- load page contents -->

    <?php require "admin/section/content-area.php";?>
</div>
<footer>
    <!-- load footer -->
    <?php require "admin/section/footer.php";?>
</footer>
</body>

</html>
