<!doctype html>
<html lang="en">

<head>
    <style>
        td {
            text-align: center;
            vertical-align: middle;
        }

        th {
            text-align: center;
            vertical-align: middle;
        }
    </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>eTicket</title>
</head>

<body>
    <div class="col-lg-12">
        <h1 class="page-header">Rekapitulasi Transaksi</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="dataTable_wrapper">
                        <div class="container">
                            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                                <tr>
                                    <td>BULAN</td>
                                    <td>PENDAPATAN</td>
                                    <td>AKSI</td>
                                </tr>

                                <tr>
                                    <td>Juli</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllJul->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapJul') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>

                                <tr>
                                    <td>Agustus</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllAug->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapAug') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>September</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllSept->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapSept') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Oktober</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllOct->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapOct') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>November</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllNov->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapNov') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Desember</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllDes->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapDes') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Januari</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllJan->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapJan') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Februari</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllFeb->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapFeb') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Maret</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllMar->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapMar') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>April</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllApr->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapApr') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Mei</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllMei->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapMei') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                                <tr>
                                    <td>Juni</td>
                                    <td>Rp. <?php echo number_format($sum_totalAllJun->total) ?></td>
                                    <td><a href="<?= base_url('home/detail_rekapJun') ?>"><button class="btn btn-warning">Lihat</button></a></td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>