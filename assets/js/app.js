/*some tweal for jslint*/
/*jslint browser:true*/
/*global jQuery:false*/

/*assign jQuery its precious $ sign*/
jQuery(document).ready(function ($) {
    $(document).foundation();
$( ".nav-toggle" ).click(function() {
  $(this).toggleClass("open");
  $("nav").fadeToggle(100);

  return false;
});
    
});

