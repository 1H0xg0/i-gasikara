<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../assets/images/favicon.png">
    <title>Admin Pro Admin Template - The Ultimate Bootstrap 4 Admin Template</title>


    <?php echo $this->template->stylesheet; ?>

    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body class="card-no-border">
<!-- ============================================================== -->
<!-- LOADER -->
<!-- ============================================================== -->
<div class="preloader">
    <div class="loader">
        <div class="loader__figure"></div>
        <p class="loader__label">Chargement</p>
    </div>
</div>


<section id="wrapper">

    <?php echo $this->template->content; ?>

</section>


<?php echo $this->template->javascript; ?>

</body>


</html>