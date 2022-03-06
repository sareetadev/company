/* testimonials */

$('.slider2').slick({
  dots: false,
  infinite: true,
  speed: 300,
  autoplay:true,
  slidesToShow: 3,
  slidesToScroll: 3,
  
  responsive: [
    {
      breakpoint: 1060,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
  ]
});