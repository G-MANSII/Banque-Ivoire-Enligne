   
   $(document).ready(function()
   {
      var jQueryDatePicker1Options =
      {
         dateFormat: 'mm/dd/yy',
         changeMonth: false,
         changeYear: false,
         showButtonPanel: false,
         showAnim: 'show'
      };
      $("#jQueryDatePicker1").datepicker(jQueryDatePicker1Options);
      $("#jQueryDatePicker1").datepicker("setDate", "");
      $("#jQueryDatePicker1").change(function()
      {
         $('#jQueryDatePicker1_input').attr('value',$(this).val());
      });
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
