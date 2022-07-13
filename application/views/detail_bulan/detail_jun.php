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
        <h1 class="page-header">Rekapitulasi Juni</h1>
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
                                    <td>Kamis, 01-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun1->total) ?></td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>Jumat, 02-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun2->total) ?></td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td>Sabtu, 03-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun3->total) ?></td>
                                </tr>
                                <tr>
                                    <td>4</td>
                                    <td>Minggu, 04-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun4->total) ?></td>
                                </tr>
                                <tr>
                                    <td>5</td>
                                    <td>Senin, 05-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun5->total) ?></td>
                                </tr>
                                <tr>
                                    <td>6</td>
                                    <td>Selasa, 06-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun6->total) ?></td>
                                </tr>
                                <tr>
                                    <td>7</td>
                                    <td>Rabu, 07-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun7->total) ?></td>
                                </tr>
                                <tr>
                                    <td>8</td>
                                    <td>Kamis, 08-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun8->total) ?></td>
                                </tr>
                                <tr>
                                    <td>9</td>
                                    <td>Jumat, 09-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun9->total) ?></td>
                                </tr>
                                <tr>
                                    <td>10</td>
                                    <td>Sabtu, 10-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun10->total) ?></td>
                                </tr>
                                <tr>
                                    <td>11</td>
                                    <td>Minggu, 11-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun11->total) ?></td>
                                </tr>
                                <tr>
                                    <td>12</td>
                                    <td>Senin, 12-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun12->total) ?></td>
                                </tr>
                                <tr>
                                    <td>13</td>
                                    <td>Selasa, 13-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun13->total) ?></td>
                                </tr>
                                <tr>
                                    <td>14</td>
                                    <td>Rabu, 14-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun14->total) ?></td>
                                </tr>
                                <tr>
                                    <td>15</td>
                                    <td>Kamis, 15-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun15->total) ?></td>
                                </tr>
                                <tr>
                                    <td>16</td>
                                    <td>Jumat, 16-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun16->total) ?></td>
                                </tr>
                                <tr>
                                    <td>17</td>
                                    <td>Sabtu, 17-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun17->total) ?></td>
                                </tr>
                                <tr>
                                    <td>18</td>
                                    <td>Minggu, 18-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun18->total) ?></td>
                                </tr>
                                <tr>
                                    <td>19</td>
                                    <td>Senin, 19-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun19->total) ?></td>
                                </tr>
                                <tr>
                                    <td>20</td>
                                    <td>Selasa, 20-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun20->total) ?></td>
                                </tr>
                                <tr>
                                    <td>21</td>
                                    <td>Rabu, 21-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun21->total) ?></td>
                                </tr>
                                <tr>
                                    <td>22</td>
                                    <td>Kamis, 22-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun22->total) ?></td>
                                </tr>
                                <tr>
                                    <td>23</td>
                                    <td>Jumat, 23-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun23->total) ?></td>
                                </tr>
                                <tr>
                                    <td>24</td>
                                    <td>Sabtu, 24-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun24->total) ?></td>
                                </tr>
                                <tr>
                                    <td>25</td>
                                    <td>Minggu, 25-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun25->total) ?></td>
                                </tr>
                                <tr>
                                    <td>26</td>
                                    <td>Senin, 26-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun26->total) ?></td>
                                </tr>
                                <tr>
                                    <td>27</td>
                                    <td>Selasa, 27-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun27->total) ?></td>
                                </tr>
                                <tr>
                                    <td>28</td>
                                    <td>Rabu, 28-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun28->total) ?></td>
                                </tr>
                                <tr>
                                    <td>29</td>
                                    <td>Kamis, 29-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun29->total) ?></td>
                                </tr>
                                <tr>
                                    <td>30</td>
                                    <td>Jumat, 30-06-2023</td>
                                    <td>Rp.<?php echo number_format($sum_totalJun30->total) ?></td>
                                </tr>

                                <tr style="font-weight: bold;">
                                    <td colspan="2">Jumlah Total :</td>

                                    <td>Rp.<?php echo number_format($sum_totalAllJun->total) ?></td>
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