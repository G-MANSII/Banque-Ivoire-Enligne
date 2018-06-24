   
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
