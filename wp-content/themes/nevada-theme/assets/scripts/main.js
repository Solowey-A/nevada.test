function $(selector) {
  return document.querySelector(selector);
}

$('.subscribe').addEventListener('focus', function () {
  this.classList.add('form_focus');
}, true);

$('.subscribe').addEventListener('blur', function () {
  this.classList.remove('form_focus');
}, true);



var wpcf7Elm = document.querySelector( '.wpcf7' );
var alert = document.querySelector('.subscribe');

wpcf7Elm.addEventListener( 'wpcf7invalid', function( event ) {
  alert.classList.add("alert");

}, false );
