<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
    <script src="ajax-script-ff.js"></script>
</head>
<body>
    <header>
        <img src="../model/header.jpg" alt="header" width="950px" height="120px">
    </header>

    <div class="wrap">
        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="../model/ff.jpg" alt="pict" width="120%">
                </div>
            </div>
        </aside>
        <form action="ff.php" id="myForm" method="post">
        <div class="blog">
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <div class="form">
                    <p class="text">1. Masukkan Tujuan</p>
                    <label for="text">ID :</label>
                    <input name="id" id="id" type="text" placeholder="Masukkan ID game">
                    <label for="text">Server :</label>
                    <input name="server" id="server" type="text" placeholder="Nomor server game">
                </div>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <div class="form">
                    <p class="text">2. Masukkan Email </p>
                    <label for="text">Email :</label>
                    <input name="email" id="email" type="text" placeholder="Masukkan email">
                </div>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <p class="text">3. Pilih Diamond</p>
                <button type="button" class="button1" onclick="selectDiamond('5 Diamond'); pilihDiamond(1000); changecolor(this)">
                    <span>💎 5 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('12 Diamond'); pilihDiamond(2000); changecolor(this)">
                    <span>💎 12 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('50 Diamond'); pilihDiamond(8000); changecolor(this)">
                    <span>💎 50 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('70 Diamond'); pilihDiamond(10000); changecolor(this)">
                    <span>💎 70 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('140 Diamond'); pilihDiamond(20000); changecolor(this)">
                    <span>💎 140 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('355 Diamond'); pilihDiamond(50000); changecolor(this)">
                    <span>💎 355 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('720 Diamond'); pilihDiamond(100000); changecolor(this)">
                    <span>💎 720 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('1450 Diamond'); pilihDiamond(200000); changecolor(this)">
                    <span>💎 1450 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('2180 Diamond'); pilihDiamond(300000); changecolor(this)">
                    <span>💎 2180 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('3640 Diamond'); pilihDiamond(500000); changecolor(this)">
                    <span>💎 3640 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('7290 Diamond'); pilihDiamond(1000000); changecolor(this)">
                    <span>💎 7290 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('36500 Diamond'); pilihDiamond(5000000); changecolor(this)">
                    <span>💎 36500 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('73100 Diamond'); pilihDiamond(10000000); changecolor(this)">
                    <span>💎 73100 DIAMOND</span>
                </button>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <p class="text">4. Pilih Metode Pembayaran</p>
                <hr>    
                <input type="image" src="../model/bni.jpg" width="120px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('BNI'); toggleButton(this)">
                        <span id="hargaText">Rp. 0</span>
                    </button>
                    <hr>
                    <input type="image" src="../model/bca.jpg" width="135px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('BCA'); toggleButton(this)">
                        <span id="hargaTexta">Rp. 0</span>
                    </button>
                    <hr>
                    <input type="image" src="../model/bri.jpg" width="90px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('BRI'); toggleButton(this)">
                        <span id="hargaTextb">Rp. 0</span>
                    </button>
                    <hr>
                    <input type="image" src="../model/shopee.jpg" width="110px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('ShopeePay'); toggleButton(this)">
                        <span id="hargaTextc">Rp. 0</span>
                    </button>
                    <hr>
                    <input type="image" src="../model/dana.jpg" width="155px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('Dana'); toggleButton(this)">
                        <span id="hargaTextd">Rp. 0</span>
                    </button>
                    <hr>
                    <input type="image" src="../model/ovo.jpg" width="110px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('OVO'); toggleButton(this)">
                        <span id="hargaTexte">Rp. 0</span>
                    </button>
                    <hr>
                    <input type="image" src="../model/gopay.png" width="120px" height="45px">
                    <button type="button" class="change-button" onclick="selectPaymentMethod('GoPay'); toggleButton(this)">
                        <span id="hargaTextf">Rp. 0</span>
                    </button>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <p class="text">5. Bayar</p>
                <button class="button" type= "button" onclick="submitData()">
                    <span>Bayar</span>
                    <div class="cart">
                        <svg viewBox="0 0 36 26">
                            <polyline
                                points="1 2.5 6 2.5 10 18.5 25.5 18.5 28.5 7.5 7.5 7.5"
                            ></polyline>
                            <polyline points="15 13.5 17 15.5 22 10.5"></polyline>
                        </svg>
                    </div>
                </button>
                <div id="result"></div>
            </div>
</form>
</body>
</html>