   
   $(document).ready(function()
   {
      $("#NavigationBar2 .navbar a").hover(function()
      {
         if ($(this).hasClass('active'))
            return;
         $("img", this).stop().animate({top:"-30px"},{queue:false,duration:500});
      }, function()
      {
         $("img", this).stop().animate({top:"0px"},{queue:false,duration:500});
      })
      $("#NavigationBar2").affix({offset:{top: $("#NavigationBar2").offset().top}});
      $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'push', position: 'left', toggle: true});
      var ListView1Options =
      {
         inset: false
      };
      $("#ListView1").listview(ListView1Options);
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
   });
