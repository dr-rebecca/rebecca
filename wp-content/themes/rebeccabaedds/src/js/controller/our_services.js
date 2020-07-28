export default ()=>{
    console.log("ds")
    $(document).ready(function(){
        $('.owl-carousel').owlCarousel({
          loop:true,
          nav:false,
          responsive:{
              0:{
                  items:1.1
              },
              500:{
                  items:1
              }
          }
      })
      });
}