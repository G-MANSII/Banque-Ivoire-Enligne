   
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
                        
                        function selectgrh() {
                           var eID = document.getElementById("combogrh");
                           var colorVal = eID.options[eID.selectedIndex].value;
                           var colortxt = eID.options[eID.selectedIndex].text;
                        
                          if (colorVal=="Agences") {
                                       window.location.href="../administrator/conf/Agences.php" ;
                                       } else if (colorVal=="Categoriedeposte"){ 
                                       window.location.href="../administrator/conf/Categorie_de_poste.php";
                                       } else if (colorVal=="Congés"){ 
                                       window.location.href="../administrator/conf/Congés.php";
                                       } else if (colorVal=="Contrats"){ 
                                       window.location.href="../administrator/conf/Contrats.php";
                                       } else if (colorVal=="Fonctions"){ 
                                       window.location.href="../administrator/conf/Fonctions.php";
                                       } else if (colorVal=="Formations"){ 
                                       window.location.href="../administrator/conf/Formations.php";
                                       } else if (colorVal=="Pays"){ 
                                       window.location.href="../administrator/conf/Pays.php";
                                       } else if (colorVal=="Postes"){ 
                                       window.location.href="../administrator/conf/Postes.php";
                                       } else if (colorVal=="Promotions"){ 
                                       window.location.href="../administrator/conf/Promotions.php";
                                       } else if (colorVal=="Services"){ 
                                       window.location.href="../administrator/conf/Services.php";
                                       } else if (colorVal=="Typedecontrats"){ 
                                       window.location.href="../administrator/conf/Type_de_contrats.php";
                                       } else if (colorVal=="Villes"){ 
                                       window.location.href="../administrator/conf/Villes.php";
                                       } 
                        }
                                 
            