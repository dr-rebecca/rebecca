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

  $(".menu-item-has-children").each(function () {
    var text = $(this).children("a").attr("href");
    text =text.substr(1,text.length-1);
    $(this).addClass(text);
  })
}