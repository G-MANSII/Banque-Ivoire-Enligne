   
   $(document).ready(function()
   {
      var jQueryTabs1Options =
      {
         show: true,
         event: 'click',
         collapsible: false
      };
      $("#jQueryTabs1").tabs(jQueryTabs1Options);
      $("#jQueryTabs1 .ui-tabs-nav, #jQueryTabs1 .ui-tabs-nav > *")
         .removeClass("ui-corner-all ui-corner-top")
         .addClass("ui-corner-bottom");
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
