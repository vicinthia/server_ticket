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
        <h1 class="page-header">Rekapitulasi Januari</h1>
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
                                    <td>Minggu, 01-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan1->total) ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Senin, 02-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan2->total) ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Selasa, 03-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan3->total) ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Rabu, 04-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan4->total) ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Kamis, 05-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan5->total) ?></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Jumat, 06-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan6->total) ?></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Sabtu, 07-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan7->total) ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Minggu, 08-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan8->total) ?></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Senin, 09-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan9->total) ?></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Selasa, 10-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan10->total) ?></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Rabu, 11-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan11->total) ?></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Kamis, 12-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan12->total) ?></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Jumat, 13-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan13->total) ?></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Sabtu, 14-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan14->total) ?></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Minggu, 15-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan15->total) ?></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Senin, 16-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan16->total) ?></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Selasa, 17-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan17->total) ?></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Rabu, 18-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan18->total) ?></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Kamis, 19-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan19->total) ?></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Jumat, 20-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan20->total) ?></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Sabtu, 21-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan21->total) ?></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Minggu, 22-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan22->total) ?></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Senin, 23-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan23->total) ?></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Selasa, 24-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan24->total) ?></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Rabu, 25-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan25->total) ?></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Kamis, 26-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan26->total) ?></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Jumat, 27-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan27->total) ?></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Sabtu, 28-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan28->total) ?></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Minggu, 29-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan29->total) ?></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Senin, 30-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan30->total) ?></td>
                                </tr>
                                <tr>
                                    <td>31</td>
                                    <td>Selasa, 31-01-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJan31->total) ?></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>

                                    <td>Rp.<?php echo number_format($sum_totalAllJan->total) ?></td>
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