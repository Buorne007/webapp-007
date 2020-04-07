<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8" http-equiv="Content-Type" content="text/html">
//the path to stylesheet goes here
    <title>
        <?php echo $title; ?>
    </title>

    <?php include ("admin/section/header.php")?>
</head>

<body>
    <div id="wrapper" class="container content-area">
        <?php include ("admin/section/content-area.php")?>
    </div>

    <div id="sidebar" class="sidebar">
        <?php include ("admin/section/sidebar.php")?>
    </div>

    <div id="footer" class="footer">
        <?php include ("admin/section/footer.php")?>
    </div>

</body>

</html>