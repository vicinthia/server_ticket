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
        <h1 class="page-header">Rekapitulasi April</h1>
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
                                    <td>Sabtu, 01-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr1->total) ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Minggu, 02-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr2->total) ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Senin, 03-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr3->total) ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Selasa, 04-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr4->total) ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Rabu, 05-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr5->total) ?></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Kamis, 06-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr6->total) ?></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Jumat, 07-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr7->total) ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Sabtu, 08-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr8->total) ?></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Minggu, 09-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr9->total) ?></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Senin, 10-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr10->total) ?></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Selasa, 11-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr11->total) ?></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Rabu, 12-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr12->total) ?></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Kamis 13-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr13->total) ?></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Jumat, 14-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr14->total) ?></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Sabtu, 15-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr15->total) ?></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Minggu, 16-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr16->total) ?></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Senin, 17-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr17->total) ?></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Selasa, 18-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr18->total) ?></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Rabu, 19-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr19->total) ?></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Kamis, 20-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr20->total) ?></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Jumat, 21-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr21->total) ?></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Sabtu, 22-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr22->total) ?></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Minggu, 23-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr23->total) ?></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Senin, 24-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr24->total) ?></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Selasa, 25-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr25->total) ?></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Rabu, 26-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr26->total) ?></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Kamis, 27-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr27->total) ?></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Jumat, 28-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr28->total) ?></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Sabtu, 29-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr29->total) ?></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Minggu, 30-04-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalApr30->total) ?></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>

                                    <td>Rp.<?php echo number_format($sum_totalAllApr->total) ?></td>
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