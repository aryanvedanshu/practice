$('.center').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });
          
  $(document).ready(function(){
    console.log($('#carouselwithIndicators').css('height')); // check the initial height of the carousel;
        
    // now apply this height as a max-height on all the image items; css will handle the rest;
    $('#carouselwithIndicators').find('.carousel-item img').css('max-height', $('#carouselwithIndicators').css('height'))
  });