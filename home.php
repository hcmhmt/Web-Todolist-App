<?php session_start();
if ($_SESSION) {
    if (!$_SESSION["isLogin"])
        header('Location:http://localhost/todolist/index.php');
} else {
    header('Location:http://localhost/todolist/index.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <title>todoList App</title>
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
          rel="stylesheet">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">
<div id="wrapper">

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="home.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">todoList App</div>
        </a>

        <hr class="sidebar-divider my-0">

        <li class="nav-item">
            <a class="nav-link" href="home.php">
                <i class="fas fa-fw fa-list-alt"></i>
                <span>Yapılacaklar Listesi</span></a>
        </li>
    </ul>


    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">

            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown no-arrow">
                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION["mail"]; ?></span>
                            <img class="img-profile rounded-circle" src="1.png">
                        </a>

                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                             aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                Çıkış Yap
                            </a>
                        </div>
                    </li>

                </ul>

            </nav>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-7">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h4 class="m-0 font-weight-bold text-primary">Yapılacaklar Listem</h4>
                            </div>
                            <div id="myList" class="card-body">
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-5">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Yapılacak İşlerin mi var?</h6>
                            </div>

                            <div class="card-body">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" id="newTodo"
                                           name="newTodo"
                                           aria-describedby="newTodo" placeholder="Haydi yeni bir iş ekle ...">
                                </div>

                                <button id="addTodo" class="btn btn-outline-success btn-user btn-block">
                                    Ekle
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <span>Copyright &copy; hcMhmt 2020</span>
                </div>
            </div>
        </footer>

    </div>

</div>

<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-body">Çıkış yapmak istediğinize emin misiniz?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Hayır</button>
                <a class="btn btn-primary" href="logout.php">Evet</a>
            </div>
        </div>
    </div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="js/sb-admin-2.min.js"></script>
<script src="js/home.js"></script>
<script src="js/sweetalert.min.js"></script>

</body>
</html>


<!--<link href="css/iziToast.min.css" rel="stylesheet">
<script src="js/iziToast.min.js" type="text/javascript"></script>
<script>
    iziToast.success({
        title: 'Merhaba',
        message: 'Tekrardan Hoşgeldiniz!'
    });
</script>-->
