   
   $(document).ready(function()
   {
      $("#Slider").slideshow(
      {
         interval: 5000,
         type: 'sequence',
         effect: 'zoominout',
         direction: '',
         pagination: false,
         effectlength: 2000
      });
      $("#Nav .navbar a").hover(function()
      {
         if ($(this).hasClass('active'))
            return;
         $(this).children("span").stop().fadeTo(500, 0);
      }, function()
      {
         $(this).children("span").stop().fadeTo(500, 1);
      })
   });
