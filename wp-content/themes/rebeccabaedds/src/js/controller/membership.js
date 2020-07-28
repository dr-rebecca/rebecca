export default () => {
    console.log("membership")
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            nav: false,
            responsive: {
                0: {
                    items: 1.1
                },
                600: {
                    items: 1.1,

                },
                1000: {
                    items: 3
                },
                1200:{
                    items:3,
                }
            }
        })
    });
}
