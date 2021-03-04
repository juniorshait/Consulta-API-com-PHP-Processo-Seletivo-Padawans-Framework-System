<?php
session_start();
ob_start();
$nome = $_SESSION['nome'];
if ($nome == "") {
    header("location: index.php");
} else {
}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" type="text/css" href="css/menu.css" />
    <link rel="sortcut icon" href="image/shait.png" type="image/x-icon" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <!-- <script src="sweetalert2/dist/sweetalert2.min.js"></script> -->
    <!-- <link rel="stylesheet" href="sweetalert2/dist/sweetalert2.min.css"> -->

</head>

<body id="mensagem-sucesso" style=" background-color:#d4dadd;">


    <input type="checkbox" id="check">
    <!--header area start-->
    <header>

        <label for="check">
            <i class="fas fa-bars" id="sidebar_btn"></i>

        </label>
        <div class="left_area">
            <a> <img src="image/logo.jpeg" alt="" width="130" /></a>
        </div>

    </header>
    <!--header area end-->
    <!--mobile navigation bar start-->
    <div class="mobile_nav">
        <div class="nav_bar">

            <i class="fa fa-bars nav_btn"></i>
        </div>
        <div class="mobile_nav_items">
            <a href="postagens.php"><i class="fas fa-ad"></i><span>POSTAGENS</span></a></br></br>
            <a href="albuns.php"><i class="fas fa-box-open"></i><span>ALBUNS</span></a>
            <a href="to-dos.php"><i class="fa fa-tasks" aria-hidden="true"></i><span>TO-DOs</span></a>
            <a href="index.php"><i class="fa fa-sign-out-alt"></i><span>Sair</span></a>
        </div>
    </div>
    <!--mobile navigation bar end-->
    <!--sidebar start-->
    <div class="sidebar">
        </br>
        <a style="color:white;" class="name"><span><?php
                                                    echo "<div>Bem vindo(a) <div style='color:#99ffcc; margin-top:-10%;  white-space: nowrap;'>$nome!</div></div>";
                                                    ?></span></a>
        <a style=" height:50px;" href="postagens.php"><i class="fas fa-ad"></i><span>POSTAGENS</span></a>
        <a style="height:50px;" href="albuns.php"><i class="fas fa-bookmark"></i><span>ALBUNS</span></a>
        <a style="height:50px;" href="to-dos.php"><i class="fas fa-tasks"></i><span>TO-DOs</span></a>
        <a style="height:50px;" href="index.php"><i class="fa fa-sign-out-alt" aria-hidden="true"></i><span>SAIR</span></a>
    </div>


    <!--sidebar end-->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>

</html>