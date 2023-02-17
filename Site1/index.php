<!DOCTYPE html>
<html len="en">
<head>
<meta charset="UTF-8">
<title>Site 1</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container" >
    <div class="row">
        <header class="col-sm-12 col-md-12 col-lg-12">
        </header>
    </div>
    <div class="row">
        <nav class="col-sm-12 col-md-12 col-lg-12">
            <?php
            require_once ('pages/menu.php');
            require_once ('pages/functions.php');
            ?>
        </nav>
    </div>
    <div class="row">
        <section class="col-sm-12 col-md-12 col-lg-12">
<?php
if(isset($_GET['page']))
{
    $page=$_GET['page'];
    if($page==1)require_once  ('pages/home.php');
    if($page==2)require_once ('pages/upload.php');
    if($page==3)require_once ('pages/gallery.php');
    if($page==4)require_once ('pages/registration.php');
}
    ?>
        </section>
    </div>
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.js/bootstrap.min.js"></script>
</body>
</html>