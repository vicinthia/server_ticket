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
        <h1 class="page-header">Rekapitulasi Maret</h1>
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
                                    <td>Rabu, 01-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar1->total) ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Kamis, 02-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar2->total) ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Jumat, 03-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar3->total) ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Sabtu, 04-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar4->total) ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Minggu, 05-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar5->total) ?></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Senin, 06-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar6->total) ?></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Selasa, 07-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar7->total) ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Rabu, 08-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar8->total) ?></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Kamis, 09-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar9->total) ?></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Jumat, 10-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar10->total) ?></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Sabtu, 11-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar11->total) ?></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Minggu, 12-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar12->total) ?></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Senin, 13-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar13->total) ?></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Selasa, 14-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar14->total) ?></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Rabu, 15-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar15->total) ?></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Kamis, 16-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar16->total) ?></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Jumat, 17-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar17->total) ?></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Sabtu, 18-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar18->total) ?></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Minggu, 19-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar19->total) ?></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Senin, 20-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar20->total) ?></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Selasa, 21-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar21->total) ?></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Rabu, 22-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar22->total) ?></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Kamis, 23-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar23->total) ?></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Jumat, 24-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar24->total) ?></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Sabtu, 25-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar25->total) ?></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Minggu, 26-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar26->total) ?></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Senin, 27-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar27->total) ?></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Selasa, 28-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar28->total) ?></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Rabu, 29-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar29->total) ?></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Kamis, 30-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar30->total) ?></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Jumat, 31-03-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalMar31->total) ?></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>

                                    <td>Rp.<?php echo number_format($sum_totalAllMar->total) ?></td>
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