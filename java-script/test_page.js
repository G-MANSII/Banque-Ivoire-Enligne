   
   $(document).ready(function()
   {
      var $activeExtension1 = $('#Extension1 li.active');
      $('#Extension1 li a').hover(function()
      {
         $('#Extension1 li').removeClass('active');
         $(this).closest('li').addClass('active');
      }, function()
      {
         $('#Extension1 li').removeClass('active');
         $activeExtension1.addClass('active');
      });
      var $activeExtension2 = $('#Extension2 li.active');
      $('#Extension2 li a').hover(function()
      {
         $('#Extension2 li').removeClass('active');
         $(this).closest('li').addClass('active');
      }, function()
      {
         $('#Extension2 li').removeClass('active');
         $activeExtension2.addClass('active');
      });
      var jQueryDialog1Options =
      {
         modal: true,
         width: 292,
         height: 382,
         position: { my: 'center', at: 'center', of: window },
         resizable: false,
         draggable: true,
         closeOnEscape: true,
         show: 'slide',
         hide: 'bounce',
         autoOpen: true,
         dialogClass: 'jQueryDialog1'
      };
      $("#jQueryDialog1").dialog(jQueryDialog1Options);
   });
