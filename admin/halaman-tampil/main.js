document.addEventListener('DOMContentLoaded', function() {
  var buttonEdit = document.getElementsByClassName('button-edit');
  for (var i = 0; i < buttonEdit.length; i++) {
    if(sessionStorage.getItem('button-edited-' + i)) {
      buttonEdit[i].textContent = 'DONE';
      buttonEdit[i].classList.add('button-edited');
    }

    buttonEdit[i].addEventListener('click', function() {
      var index = Array.from(buttonEdit).indexOf(this);
      this.textContent = 'DONE';
      this.classList.add('button-edited');
      sessionStorage.setItem('button-edited-' + index, true);
    });
  }
});