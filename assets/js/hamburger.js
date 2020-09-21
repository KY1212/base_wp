$(function(){

  $hamburger = $(".hamburger");
  $menu = $("header").find(".menu");

  function hamburger() {
    $hamburger.on("click", function(){
      $hamburger.toggleClass("open");
      $menu.toggleClass("open");
    });
  }

  hamburger();

});
