$(document).ready(_=>{
  //alert("wenos dias");
});
$(window).on('scroll',()=>{
       if ($(window).scrollTop()) {
           $('nav').addClass('black');
       }else{
           $('nav').removeClass('black');
       }
});
