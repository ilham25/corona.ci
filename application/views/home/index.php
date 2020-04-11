<!-- Page Wrapper -->
<div id="wrapper">

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

        <!-- Main Content -->
        <div id="content">

            <!-- Topbar -->
            <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">


                <ul class="navbar-nav ml-auto">

                    <!-- Nav Item - Alerts -->
                    <li class="nav-item dropdown no-arrow mx-1">
                        <a class="nav-link dropdown-toggle" href="https://api.kawalcorona.com">
                            <i class="fas fa-code fa-fw"></i>

                        </a>
                    </li>




                </ul>



            </nav>
            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">
                <div class="col">
                    <div class="row justify-content-center mb-4">
                        <div class="col-xl-4 col-md-6">
                            <div class="row justify-content-center">
                                <h1 class="text-gray-800">Kawal Corona</h1>
                            </div>
                            <div class="row justify-content-center">
                                <h6 class="text-gray-600">Data Global dan Indonesia</h6>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-center">
                        <div class="col">
                            <div class="row justify-content-center">

                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Global</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Indonesia</a>
                                    </li>

                                </ul>

                            </div>
                            <div class="row justify-content-center">
                                <div class="tab-content" id="pills-tabContent">
                                    <!-- Tab Global -->
                                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">

                                        <!-- Content Row -->
                                        <div class="row justify-content-center">

                                            <!-- Total Positif Card -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card bg-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Positif</div>
                                                                <div class="h2 mb-0 font-weight-bold text-white"><?= $apiWorld['positif'] ?></div>
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orang</div>

                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="far fa-surprise fa-4x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Total Sembuh Card -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card bg-success shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Sembuh</div>
                                                                <div class="h2 mb-0 font-weight-bold text-white"><?= $apiWorld['sembuh'] ?></div>
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orang</div>

                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="far fa-smile-beam fa-4x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Total Meninggal Card -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card bg-dark shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Meninggal</div>
                                                                <div class="h2 mb-0 font-weight-bold text-white"><?= $apiWorld['meninggal'] ?></div>
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orang</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                                                <i class="far fa-sad-tear fa-4x text-white"></i>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <!-- DataTales Example -->
                                                    <div class="card shadow mb-4">
                                                        <div class="card-header py-3">
                                                            <h6 class="m-0 font-weight-bold text-primary">Data Per Negara</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                                                                <table class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Negara</th>
                                                                            <th>Total Positif</th>
                                                                            <th>Total Sembuh</th>
                                                                            <th>Total Meninggal</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($apiRegion as $r) : ?>
                                                                            <tr>
                                                                                <td><?= $i++ ?></td>
                                                                                <td><?= $r['Country_Region'] ?></td>
                                                                                <td><?= $r['Confirmed'] ?></td>
                                                                                <td><?= $r['Recovered'] ?></td>
                                                                                <td><?= $r['Deaths'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.container-fluid -->
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Tab Indonesia -->
                                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                        <!-- Content Row -->
                                        <div class="row justify-content-center">

                                            <!-- Total Positif Card -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card bg-danger shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Positif</div>
                                                                <div class="h2 mb-0 font-weight-bold text-white"><?= $apiIndonesia[0]['positif'] ?></div>
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orang</div>

                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="far fa-surprise fa-4x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Total Sembuh Card -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card bg-success shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Sembuh</div>
                                                                <div class="h2 mb-0 font-weight-bold text-white"><?= $apiIndonesia[0]['sembuh'] ?></div>
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orang</div>

                                                            </div>
                                                            <div class="col-auto">
                                                                <i class="far fa-smile-beam fa-4x text-white"></i>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Total Meninggal Card -->
                                            <div class="col-xl-3 col-md-6 mb-4">
                                                <div class="card bg-dark shadow h-100 py-2">
                                                    <div class="card-body">
                                                        <div class="row no-gutters align-items-center">
                                                            <div class="col mr-2">
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Total Meninggal</div>
                                                                <div class="h2 mb-0 font-weight-bold text-white"><?= $apiIndonesia[0]['meninggal'] ?></div>
                                                                <div class="text-xs font-weight-bold text-white text-uppercase mb-1">Orang</div>
                                                            </div>
                                                            <div class="col-auto">
                                                                <!-- <i class="fas fa-calendar fa-2x text-gray-300"></i> -->
                                                                <i class="far fa-sad-tear fa-4x text-white"></i>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row justify-content-center">
                                                <div class="col">
                                                    <!-- DataTales Example -->
                                                    <div class="card shadow mb-4">
                                                        <div class="card-header py-3">
                                                            <h6 class="m-0 font-weight-bold text-primary">Data Per Provinsi</h6>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="table-responsive table-wrapper-scroll-y my-custom-scrollbar">
                                                                <table class="table table-striped table-bordered">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>No.</th>
                                                                            <th>Provinsi</th>
                                                                            <th>Total Positif</th>
                                                                            <th>Total Sembuh</th>
                                                                            <th>Total Meninggal</th>

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <?php $i = 1; ?>
                                                                        <?php foreach ($apiProvinsi as $p) : ?>
                                                                            <tr>
                                                                                <td><?= $i++ ?></td>
                                                                                <td><?= $p['Provinsi'] ?></td>
                                                                                <td><?= $p['Kasus_Posi'] ?></td>
                                                                                <td><?= $p['Kasus_Semb'] ?></td>
                                                                                <td><?= $p['Kasus_Meni'] ?></td>
                                                                            </tr>
                                                                        <?php endforeach; ?>

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <!-- /.container-fluid -->
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>


        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
            <div class="container my-auto">
                <div class="copyright text-center my-auto">
                    <h6>API by: <a href="https://api.kawalcorona.com">api.kawalcorona.com</a> | Website by : <strong>Ilham Adiputra</strong></h6>
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