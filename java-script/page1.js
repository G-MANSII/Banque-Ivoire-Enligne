   
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
   });
