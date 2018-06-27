   
   $(document).ready(function()
   {
      $("#menu .navbar a").hover(function()
      {
         if ($(this).hasClass('active'))
            return;
         $("img", this).stop().animate({top:"-30px"},{queue:false,duration:500});
      }, function()
      {
         $("img", this).stop().animate({top:"0px"},{queue:false,duration:500});
      })
      $("#menu").affix({offset:{top: $("#menu").offset().top}});
   });
