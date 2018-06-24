   
   $(document).ready(function()
   {
      $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'push', position: 'left', toggle: true});
      var jQueryMenu1Options =
      {
         icons: { submenu: 'ui-icon-carat-1-s' },
         position: { using: setSubMenu }
      };
      $("#jQueryMenu1").menu(jQueryMenu1Options);
      function setSubMenu(position, elements)
      {
         var options = { of: elements.target.element };
         if (elements.element.element.parent().parent().attr('id') === 'jQueryMenu1')
         {
            options.my = 'left top';
            options.at = 'right top';
         }
         else
         {
            options.my = 'left top';
            options.at = 'right top';
         }
         elements.element.element.position(options);
      }
      $("#menu a").mouseenter(function(e)
      {
         $("#menu_wrapper").parent().remove();
         var $wrapper = $("<div id='menu_wrapper'></div>");
         var $link = $("<a></a>");
         $link.attr('href', $(this).attr('href'));
         $link.attr('target', $(this).attr('target'));
         $wrapper.css('left', $(this).offset().left+'px');
         $wrapper.css('top', $(this).offset().top+'px');
         $wrapper.css('width', $(this).find('img').width()+'px');
         $wrapper.css('height', $(this).find('img').height()+'px');
         $wrapper.appendTo("body");
         $wrapper.wrap($link);
         $wrapper.mouseout(function()
         {
            $('#menu_wrapper').parent().remove();
            $("#menu span").show('squares', { easing: 'linear', fx: 'rain'}, 500);
         });
         $(this).children("span").hide('squares', { easing: 'linear', reverse: true, fx: 'rain'}, 500);
      });
      $("#NavigationBar1 .navbar a").hover(function()
      {
         if ($(this).hasClass('active'))
            return;
         $(this).children("span").stop().fadeTo(500, 0);
      }, function()
      {
         $(this).children("span").stop().fadeTo(500, 1);
      })
   });
