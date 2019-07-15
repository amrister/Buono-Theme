$(document).ready(function(){

  navbar_checker();
  $(window).on('scroll',function(){
    navbar_checker();
  });


  // Function To Add Scroll to navbar
  function navbar_checker(){
    var scrollTop = $(window).scrollTop();
    if(scrollTop>=120){
      $('.navbar').addClass('scroll');
    }else{
      $('.navbar').removeClass('scroll');
    }
  }
});
