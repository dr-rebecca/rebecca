export default () => {
    console.log("tecg")
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: false,
            responsive: {
                0: {
                    items: 1.5
                },
                600: {
                    items: 3,

                },
                1000: {
                    items: 3.5
                },
                1200:{
                    items:4.5,
                }
            }
        })
    });
}
