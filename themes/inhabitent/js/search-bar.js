//this is function shows and hides


jQuery(document).ready(function($) {

  $('.toggle-search').on('click' , function(){


    $input = $('.header-search input');
    $input.toggle('slow');
    $input.focus();
  });

});
