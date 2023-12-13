document.querySelectorAll(".button").forEach((button) =>
    button.addEventListener("click", (e) => {
        if (!button.classList.contains("loading")) {
            button.classList.add("loading");
            setTimeout(() => button.classList.remove("loading"), 3700);
        }
        e.preventDefault();
    })
);

//function untuk button diamond
let activeButton = null;

function changecolor(button) {
    if(activeButton !== null) {
        activeButton.classList.remove('active');
    }
    button.classList.add('active');
    activeButton = button;
}

//function untuk button metode pembayaran
function toggleButton(clickedButton) {
    var buttons = document.querySelectorAll('.change-button');

    buttons.forEach(function(button) {
        button.classList.remove('selected');
    });
    clickedButton.classList.add('selected');
}

//function untuk harga
function pilihDiamond(harga) {
    // Simpan harga yang dipilih di variabel global
    window.hargaDiamond = harga;

    // Tampilkan harga di elemen dengan id "hargaText"
    document.getElementById("hargaText").innerText = "Rp." + harga;
    document.getElementById("hargaTexta").innerText = "Rp." + harga;
    document.getElementById("hargaTextb").innerText = "Rp." + harga;
    document.getElementById("hargaTextc").innerText = "Rp." + harga;
    document.getElementById("hargaTextd").innerText = "Rp." + harga;
    document.getElementById("hargaTexte").innerText = "Rp." + harga;
    document.getElementById("hargaTextf").innerText = "Rp." + harga;
  }
  
//Script ajax untuk mengambil nilai inputan form kemudian dimasukkan ke database mysql

function selectDiamond(diamondType) {
    // Menetapkan nilai ke variabel global
    selectedDiamond = diamondType;
}

function selectPaymentMethod(paymentMethod) {
    // Menetapkan nilai ke variabel global
    selectedPaymentMethod = paymentMethod;
}

function submitData() {
    var id = document.getElementById("id").value;
    var server = document.getElementById("server").value;
    var email = document.getElementById("email").value;

    // Pastikan diamond dan metode pembayaran telah dipilih sebelum mengirimkan data
    if (!selectedDiamond || !selectedPaymentMethod) {
        alert("Pilih diamond dan metode pembayaran terlebih dahulu!");
        return;
    }

    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("result").innerHTML = alert('Pembayaran sedang diproses tunggu balasan dari email');
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
            resetForm();
        }
    };
    xhr.open("POST", "save-data-ff.php", true);
    xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xhr.send("id=" + encodeURIComponent(id) +
             "&server=" + encodeURIComponent(server) +
             "&email=" + encodeURIComponent(email) +
             "&diamondType=" + encodeURIComponent(selectedDiamond) +
             "&paymentMethod=" + encodeURIComponent(selectedPaymentMethod));
}

function resetForm(){
    var form = document.getElementById('myForm');
    form.reset();
}