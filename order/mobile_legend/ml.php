<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <script src="ajax-script-ml.js"></script>
</head>
<body>
    <header>
        <img src="../model/header.jpg" alt="header" width="950px" height="120px">
    </header>

    <div class="wrap">
        <aside class="sidebar">
            <div class="widget">
                <div>
                    <img class="widget-pict" src="../model/ml.jpg" alt="pict" width="120%">
                </div>
            </div>
        </aside>
        
        <form action="ml.php" id="myForm" method="post">
        <div class="blog">
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <div class="form">
                    <p class="text">1. Masukkan Tujuan</p>
                    <label for="text">ID :</label>
                    <input id="id" name="id" type="text" placeholder="Masukkan ID Game">
                    <label for="text">Server :</label>
                    <input id="server" name="server" type="text" placeholder="Nomor Server Game" >
                </div>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <div class="form">
                    <p class="text">2. Masukkan Email </p>
                    <label for="text">Email :</label>
                    <input id="email" name="email" type="text" placeholder="Masukkan email">
                </div>
            </div>
            <div class="conteudo">
                <div class="post-info">
                    Berkah store
                </div>
                <p class="text">3. Pilih Diamond</p>
                <button type="button" class="button1" onclick="selectDiamond('5 Diamond'); pilihDiamond(1500); changecolor(this)">
                    <span>💎 5 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('25 Diamond'); pilihDiamond(8200); changecolor(this)">
                    <span>💎 25 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('40 Diamond'); pilihDiamond(12000); changecolor(this)">
                    <span>💎 40 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('77 Diamond'); pilihDiamond(24000); changecolor(this)">
                    <span>💎 77 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('154 Diamond'); pilihDiamond(48000); changecolor(this)">
                    <span>💎 154 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('217 Diamond'); pilihDiamond(68000); changecolor(this)">
                    <span>💎 217 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('256 Diamond'); pilihDiamond(84000); changecolor(this)">
                    <span>💎 256 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('367 Diamond'); pilihDiamond(115000); changecolor(this)">
                    <span>💎 367 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('503 Diamond'); pilihDiamond(157500); changecolor(this)">
                    <span>💎 503 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('774 Diamond'); pilihDiamond(242000); changecolor(this)">
                    <span>💎 774 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('1708 Diamond'); pilihDiamond(526000); changecolor(this)">
                    <span>💎 1708 DIAMOND</span>
                </button>
                <button type="button" class="button1" onclick="selectDiamond('4003 Diamond'); pilihDiamond(1260000); changecolor(this)">
                    <span>💎 4003 DIAMOND</span>
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
        </div>
        </form>
</body>
</html>