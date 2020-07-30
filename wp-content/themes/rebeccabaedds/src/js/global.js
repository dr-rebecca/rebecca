import "./other"
import "bootstrap/dist/js/bootstrap"
import "jquery/dist/jquery"
import "popper.js/dist/umd/popper"
import "@fancyapps/fancybox/dist/jquery.fancybox.js"
import 'owl.carousel/dist/owl.carousel';
export default () => {
  console.log('global')
    $(".menu-item-has-children").click(function(){
    if($(this).hasClass("active")){
      $(this).removeClass("active")
      $(".menu-item-has-children .sub-menu").removeClass("open")
    }else{
      $(".menu-item-has-children .sub-menu").removeClass("open")
      $(".menu-item-has-children.active").removeClass("active")
      $(this).addClass("active")
      $(".menu-item-has-children.active .sub-menu").addClass("open")
    }
  })
  $(document).ready(function () {
    $(window).bind("resize",menu())
  })
  function menu(){
    $(".menu-item-has-children").each(function () {
      var text = $(this).children("a").attr("href");
      text =text.substr(1,text.length-1);
      $(this).children(".sub-menu").addClass(text);
      $(this).children(".sub-menu").attr('id',text);
      if(window.matchMedia('(max-width: 520px)').matches){
        console.log("được rồi nè")
        $(this).children("a").attr("data-fancybox", '');
        var id = "#";
        $(this).children("a").attr("data-src", id.concat(text));
      }
      else {
        $(this).children("a").removeAttr("data-fancybox");
        $(this).children("a").removeAttr("data-src");
      }
    })
  }


}