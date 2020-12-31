<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kamera OLShop</title>

    <!-- Custom fonts for this template-->
    <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center klik_menu" id="#dashboard" href="#">
                <div class="sidebar-brand-icon">
                <i class="fas fa-camera-retro"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Kamera OLShop</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item">
                <a class="nav-link klik_menu" id="dashboard" href="#">
                <i class="fas fa-home"></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link klik_menu" id="Kamera" href="#">
                    <i class="fas fa-chalkboard-teacher"></i>
                    <span>Kamera</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">User</span>
                                <img class="img-profile rounded-circle" src="assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid val">

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <script src="assets/vendor/jquery/jquery.min.js"></script>
    <!-- Bootstrap core JavaScript-->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="assets/js/sb-admin-2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.val').load('dashboard.php');
            $('.klik_menu').on('click', function() {
                let menu = $(this).attr('id');
                console.log(menu);
                if (menu == "dashboard") 
                {
                    $('.val').load('dashboard.php');
                }
                else if (menu == "Kamera") 
                {
                    $('.val').load('kamera.php');
                    showData();
                }
            });
            $('.val').on('click', '.addKamera', function() {
                var id_kmr = $('[name="createKODE"]').val();
                var merk = $('[name="createMERK"]').val();
                var tahun = $('[name="createTAHUN"]').val();
                var tipe = $('[name="createTIPE"]').val();
                var garansi = $('[name="createGARANSI"]').val();
                var harga = $('[name="createHARGA"]').val();
                $.ajax({
                    type: "POST",
                    url: "http://localhost/restfull_1718112/index.php/Kamera",
                    data: {
                        id_kmr: id_kmr,
                        merk: merk,
                        tahun: tahun,
                        tipe : tipe,
                        garansi: garansi,
                        harga: harga
                    },
                    dataType: "JSON",
                    success: function(response) {
                        showData();
                        $('[name="createKODE"]').val("");
                        $('[name="createMERK"]').val("");
                        $('[name="createTAHUN"]').val("");
                        $('[name="createTIPE"]').val("");
                        $('[name="createGARANSI"]').val("");
                        $('[name="createHARGA"]').val("");
                    }
                });
            });
            $('.val').on('click', '.editKamera', function() {
                var id = $(this).attr('key');
                $.ajax({
                    type: "GET",
                    url: `http://localhost/restfull_1718112/index.php/Kamera?id_kmr=${id}`,
                    dataType: "JSON",
                    success: function(response) {
                        response.data.forEach(element => {
                            $('[name="updateKODE"]').val(element.id_kmr);
                            $('[name="updateMERK"]').val(element.merk);
                            $('[name="updateTAHUN"]').val(element.tahun);
                            $('[name="updateTIPE"]').val(element.tipe);
                            $('[name="updateGARANSI"]').val(element.garansi);
                            $('[name="updateHARGA"]').val(element.harga);
                        });
                    }
                });
            });
            $('.val').on('click', '.updateGuru', function() {
                var id_kmr = $('[name="updateKODE"]').val();
                var merk = $('[name="updateMERK"]').val();
                var tahun = $('[name="updateTAHUN"]').val();
                var tipe = $('[name="updateTIPE"]').val();
                var garansi = $('[name="updateGARANSI"]').val();
                var harga = $('[name="updateHARGA"]').val();
                $.ajax({
                    type: "PUT",
                    url: `http://localhost/restfull_1718112/index.php/Kamera`,
                    data: {
                        id_kmr: id_kmr,
                        merk: merk,
                        tahun: tahun,
                        tipe : tipe,
                        garansi: garansi,
                        harga: harga
                    },
                    dataType: "JSON",
                    success: function(response) {
                        showData();
                        $('[name="updateKODE"]').val("");
                        $('[name="updateMERK"]').val("");
                        $('[name="updateTAHUN"]').val("");
                        $('[name="updateTIPE"]').val("");
                        $('[name="updateGARANSI"]').val("");
                        $('[name="updateHARGA"]').val("");
                        console.log(response);
                    }
                });
            });
            $('.val').on('click', '.deleteKamera', function() {
                var id_kmr = $(this).attr('key');
                var kondisi = confirm(`apa anda yakin ingin menghapus data ${id_kmr}`);
                if (kondisi == false) {
                    return;
                } else {
                    $.ajax({
                        type: "DELETE",
                        url: "http://localhost/restfull_1718112/index.php/Kamera",
                        data: {
                            id_kmr: id_kmr
                        },
                        dataType: "JSON",
                        success: function(response) {
                            showData();
                        }
                    });
                }

            });



            function showData() {
                let html = "";
                $.ajax({
                    type: "GET",
                    url: `http://localhost/restfull_1718112/index.php/Kamera`,
                    dataType: "JSON",
                    success: function(response) {
                        let i = 1; console.log(response);
                        response.data.forEach(element => {
                            console.log(element);
                            html += `<tr>
                                        <th scope="row">${i}</th>
                                        <td>${element.id_kmr}</td>
                                        <td>${element.merk}</td>
                                        <td>${element.tahun}</td>
                                        <td>${element.tipe}</td>
                                        <td>${element.garansi}</td>
                                        <td>${element.tahun}</td>
                                        <td>
                                            <ul class="list-inline m-0">
                                                <li class="list-inline-item">
                                                    <button key="${element.id_kmr}" class="btn btn-success btn-sm rounded-0 editKamera" type="button" data-toggle="modal" data-target="#updateModalCenterKamera"><i class="fa fa-edit"></i></button>
                                                </li>
                                                <li class="list-inline-item">
                                                    <button key="${element.id_kmr}" class="btn btn-danger btn-sm rounded-0 deleteKamera" type="button"><i class="fa fa-trash"></i></button>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>`;
                            i++;
                        });
                        $('#table_kamera').html(html);
                    }
                });
            };

            

            
        });
    </script>
    <td></td>
</body>

</html>