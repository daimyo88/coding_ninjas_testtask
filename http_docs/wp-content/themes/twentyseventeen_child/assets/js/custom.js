jQuery('document').ready(function($) {


  // Modal window with contact info in footer
  $('.footer-contact-info .modal-button').on('click', function(e) {
    e.preventDefault();
    $('.modal-wrapper').fadeIn();
  });

  $('.modal-wrapper').on('click', function(e) {
    if(!$(e.target).hasClass('modal-cont')) {
      $('.modal-wrapper').fadeOut();
    }
  });


})
