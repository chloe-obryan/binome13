function f() {
  document.getElementsByClassName('pas_dropdown')[0].classList.toggle('down');
  document.getElementsByClassName('arrow')[0].classList.toggle('gone');
  if (document.getElementsByClassName('pas_dropdown')[0].classList.contains('down')) {
    setTimeout(function() {
      document.getElementsByClassName('pas_dropdown')[0].style.overflow = 'visible'
    }, 500)
  } else {
    document.getElementsByClassName('pas_dropdown')[0].style.overflow = 'hidden'
  }
}