
   $(document).ready(function(){
     $('.sec-patents__thumbs').slick({
       dots: true,
       infinite: false,
       speed: 300,
       slidesToShow: 1,
       slidesToScroll: 1,
       responsive: [
         {
           breakpoint: 900,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1,
             infinite: true,
             dots: true
           }
         },
         {
           breakpoint: 600,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1
           }
         }

   // You can unslick at a given breakpoint now by adding:
   // settings: "unslick"
   // instead of a settings object

       ]
     });
   });
