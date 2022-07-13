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
        <h1 class="page-header">Rekapitulasi Desember</h1>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-body">

                    <div class="dataTable_wrapper">
                        <div class="container">
                            <table class="table table-bordered table-striped table-hover" id="dataTables-example">
                                <tr>
                                    <th style="text-align: center;">No</th>
                                    <th style="text-align: center;">Tanggal</th>
                                    <th style="text-align: center;">PENDAPATAN</th>
                                </tr>


                                <tr>
                                    <td>1</td>
                                    <td>Kamis, 01-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes1->total) ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jumat, 02-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes2->total) ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sabtu, 03-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes3->total) ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Minggu, 04-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes4->total) ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Senin, 05-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes5->total) ?></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Selasa, 06-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes6->total) ?></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Rabu, 07-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes7->total) ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Kamis, 08-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes8->total) ?></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Jumat, 09-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes9->total) ?></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sabtu, 10-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes10->total) ?></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Minggu, 11-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes11->total) ?></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Senin, 12-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes12->total) ?></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Selasa, 13-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes13->total) ?></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Rabu, 14-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes14->total) ?></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Kamis, 15-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes15->total) ?></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Jumat, 16-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes16->total) ?></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Sabtu, 17-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes17->total) ?></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Minggu, 18-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes18->total) ?></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Senin, 19-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes19->total) ?></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Selasa, 20-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes20->total) ?></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Rabu, 21-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes21->total) ?></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Kamis, 22-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes22->total) ?></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Jumat, 23-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes23->total) ?></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Sabtu, 24-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes24->total) ?></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Minggu, 25-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes25->total) ?></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Senin, 26-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes26->total) ?></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Selasa, 27-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes27->total) ?></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Rabu, 28-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes28->total) ?></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Kamis, 29-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes29->total) ?></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Jumat, 30-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes30->total) ?></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Sabtu, 31-12-2022</td>
                                    <td>Rp.<?php echo number_format($sum_totalDes31->total) ?></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>

                                    <td>Rp.<?php echo number_format($sum_totalAllDes->total) ?></td>
                                </tr>

                            </table>

                            <!-- <div class="row">
                                <div class="col">
                                    <?php echo $pagination; ?>
                                </div>
                            </div> -->
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