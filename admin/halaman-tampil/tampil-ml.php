<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../..//bootstraps/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../../bootstraps/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="tampil.css">
    <title>Document</title>
    <script src="main.js"></script>
</head>
<body>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <p class="logo"><a href="../../index.html"><img src="../model/game.png"></a></p>
            <ul class="navbar-nav me-auto d-flex flex-row mt-3 mt-lg-0">
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link active" aria-current="page" href="#">
                        <div>
                            <i class="fa-solid fa-hand-back-fist"></i>
                        </div>
                        Mobile Legend
                    </a>
                </li>
                <li class="nav-item text-center mx-2 mx-lg-1">
                    <a class="nav-link" aria-current="page" href="tampil-ff.php">
                        <div>
                            <i class="fa-solid fa-gun"></i>
                        </div>
                        Free Fire
                    </a>  
                </li>
            </ul>         
    </div>
</nav>
<div id="header">
    <h1> Riwayat Transaksi <span class="btn btn-primary"> Berkah Store</span></h1>
    <p id="tanggal"><?php echo date("d M Y");?></p>
</div>
                            <div class="table-responsive">
                                <table class="table table-stripped">
                                    <thead>
                                    <tr>
                                        <th>Nomor</th>
                                        <th>ID</th>
                                        <th>Server</th>
                                        <th>Email</th>
                                        <th>Diamond</th>
                                        <th>Metode Pembayaran</th>      
                                        <th>Proses</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    include("koneksi.php");
                                    $game = mysqli_query($link, "SELECT * FROM mobile_legend");
                                    $no=1;
                                    foreach ($game as $row){
                                        echo "<tr>";
                                        echo "<td>$row[id_pembeli]</td>";
                                        echo "<td>$row[id]</td>";
                                        echo "<td>$row[server]</td>";
                                        echo "<td>$row[email]</td>";
                                        echo "<td>$row[diamond]</td>";
                                        echo "<td>$row[metode]</td>";
                                        echo "<td><button class='button-edit'>Belum</button></td>";
                                        echo "</tr>";
                                        $no++;
                                    }
                                    ?>
                                    </tbody>
                                </table>
                            </div>
                <div id="footer">
                    Copyright © <?php echo date("Y"); ?> FTIK USM
                </div>
        </div>
    </div>    
    </body>
</body>
</html>