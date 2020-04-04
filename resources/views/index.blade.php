<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="#">
    <link rel="icon" type="image/png" href="#">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Status Corona Indonesia
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="https://cdn.statically.io/gh/rdp77/corona/36eb38e8/public/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.statically.io/gh/rdp77/corona/36eb38e8/public/css/paper-dashboard.css" rel="stylesheet" />
</head>

<body>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-transparent">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <a class="navbar-brand" href="javascript:;">Status Corona Indonesia</a>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="content">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-globe text-info"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Total</p>
                                        <p class="card-title">{{ $base['0']['confirmed'] }}<p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="nc-icon nc-single-02"></i>
                                Orang
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-ambulance text-warning"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Positif</p>
                                        <p class="card-title">{{ $base['0']['active'] }}<p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="nc-icon nc-single-02"></i>
                                Orang
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-satisfied text-success"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Sembuh</p>
                                        <p class="card-title">{{ $base['0']['recovered'] }}<p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="nc-icon nc-single-02"></i>
                                Orang
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-5 col-md-4">
                                    <div class="icon-big text-center icon-warning">
                                        <i class="nc-icon nc-sound-wave text-danger"></i>
                                    </div>
                                </div>
                                <div class="col-7 col-md-8">
                                    <div class="numbers">
                                        <p class="card-category">Meninggal</p>
                                        <p class="card-title">{{ $base['0']['deaths'] }}<p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer ">
                            <hr>
                            <div class="stats">
                                <i class="nc-icon nc-single-02"></i>
                                Orang
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title"> Data Kasus Berdasarkan Provinsi</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class="text-primary">
                                    <tr>
                                        <th>
                                            Provinsi
                                        </th>
                                        <th>
                                            Positif
                                        </th>
                                        <th>
                                            Sembuh
                                        </th>
                                        <th>
                                            Meninggal
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($data as $covid)
                                    <tr>
                                        <td>
                                            {{ $covid['attributes']['Provinsi'] }}
                                        </td>
                                        <td>
                                            {{ $covid['attributes']['Kasus_Posi'] }}
                                        </td>
                                        <td>
                                            {{ $covid['attributes']['Kasus_Semb'] }}
                                        </td>
                                        <td>
                                            {{ $covid['attributes']['Kasus_Meni'] }}
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <footer class="footer footer-black  footer-white ">
            <div class="container-fluid">
                <div class="row">
                    <nav class="footer-nav">
                        <ul>
                            <li><a href="https://ravidwiputra.my.id" target="_blank">Home</a></li>
                            <li><a href="https://www.backupotak.com" target="_blank">Blog</a></li>
                        </ul>
                    </nav>
                    <div class="credits ml-auto">
                        <span class="copyright">
                            © <script>
                                document.write(new Date().getFullYear())
                            </script>, made with <i class="fa fa-heart heart"></i> by RDP77
                        </span>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>