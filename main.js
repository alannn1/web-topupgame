document.addEventListener('DOMContentLoaded', function() {
    var text = "Berkah Store";
    var container = document.getElementById('animated-text');
    var index = 0;

    function animateText() {
      container.textContent = text.substring(0, index);
      index++;

      if (index > text.length) {
        index = 0; // Kembali ke awal setelah selesai
      }
    }

    setInterval(animateText, 250); // Ganti nilai 100 dengan waktu interval yang diinginkan (dalam milidetik)
  });