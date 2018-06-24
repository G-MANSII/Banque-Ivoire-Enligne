<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Administrateur</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" l'une="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" l'une="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FRonline bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../css/excite-bike/jquery-ui.min.css" rel="stylesheet">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/BIO_V1.css" rel="stylesheet">
<link href="../css/admin.css" rel="stylesheet">
<script src="../java-script/jquery-1.12.4.min.js"></script>
<script src="../java-script/jquery.ui.core.min.js"></script>
<script src="../java-script/jquery.ui.widget.min.js"></script>
<script src="../java-script/jquery.ui.datepicker.min.js"></script>
<script>   
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
</script>
</head>
<body>
   <div id="container">
      <div id="foot">
         <div id="foot_Container">
         </div>
      </div>
      <div id="zone">
         <div id="frminsc">
            <div id="Layer1">
               <hr id="Line2">
               <div id="wb_Heading1">
                  <h1 id="Heading1">Administrateur</h1></div>
               <hr id="Line1">
            </div>
            <div id="wb_btn_connexionm">
               <a href="./update_pass.php"><div id="btn_connexionm"><div id="btn_connexionm_text"><span id="wb_uid0"><strong>Change passe</strong></span></div></div></a></div>
            <div id="wb_txtphys">
               <div id="wb_uid1"><span id="wb_uid2">ler dans l'au - dela . j ai couler les larmes mais Nous tes amis </span></div>
               <div id="wb_uid3"><span id="wb_uid4">nous prions ALLAH de te pardonner tes manquements de </span></div>
               <div id="wb_uid5"><span id="wb_uid6">t'accorder l'un des Paradis que nous avions etudiez ce jour. </span></div>
               <div id="wb_uid7"><span id="wb_uid8">QU'ALLAH T ACCORDE SON PARADIS ETERNEL POUR </span></div>
               <div id="wb_uid9"><span id="wb_uid10">L'ETERNITE. RIP</span></div>
            </div>
            <div id="wb_Text2">
               <span id="wb_uid11">Nom:</span></div>
            <div id="wb_Text3">
               <span id="wb_uid12">Prénom:</span></div>
            <div id="wb_btn_connexionp">
               <a href="./update_email.php"><div id="btn_connexionp"><div id="btn_connexionp_text"><span id="wb_uid13"><strong>Changer email</strong></span></div></div></a></div>
            <div id="wb_Text4">
               <span id="wb_uid14">Email:</span></div>
            <input type="submit" id="Button1" name="btndeconn" value="Deconnexion">
            <input id="jQueryDatePicker1_input" name="jQueryDatePicker1" type="text" value="">
            <div id="jQueryDatePicker1">
            </div>
            <script>                        
                        function selectAdmin() {
                           var eID = document.getElementById("comboadmin");
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
                                 
            </script>
            <select name="Comboadmin" size="1" id="comboadmin" onchange="selectAdmin()">
               <option value="Agences">Agences</option>
               <option value="Categoriedeposte">Categorie de poste</option>
               <option value="Congés">Congés</option>
               <option value="Contrats">Contrats</option>
               <option value="Fonctions">Fonctions</option>
               <option value="Formations">Formations</option>
               <option value="Pays">Pays</option>
               <option value="Postes">Postes</option>
               <option value="Promotions">Promotions</option>
               <option value="Services">Services</option>
               <option value="Type
decontrats">Type 
de contrats</option>
               <option value="Villes">Villes</option>
            </select>
            <div id="wb_Text5">
               <span id="wb_uid15">Gestion de Base de données:</span></div>
         </div>
         <div id="wb_Breadcrumb2">
            <ul id="Breadcrumb2">
               <li><a href="./../index.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
               <li class="active"><i class="fa fa-laptop">&nbsp;</i>Administrateur</li>
            </ul>
         </div>
         <div id="Layer2">
            <div id="wb_Shape2">
               <img src="../images/img0031.png" id="Shape2" alt=""></div>
            <label for="" id="Label2">Comptes</label>
            <div id="wb_Text1">
               <span id="wb_uid16">Lodin:</span></div>
         </div>
      </div>
      <div id="Div">
         <div id="head">
            <div id="wb_band">
               <img src="../images/img0001.png" id="band" alt="Banque Ivoire Online" title="Banque Ivoire Online"></div>
            <input type="text" id="edit_reche" name="search" value="" placeholder="Recherche...">
            <div id="wb_icosear">
               <a href="./conf/Categorie_de_poste.php"><div id="icosear"><i class="fa fa-search">&nbsp;</i></div></a></div>
            <div id="wb_local">
               <div id="wb_uid17"><span id="wb_uid18"><a href="./conf/Categorie_de_poste.php">Banque prêt de chez vous&nbsp;!</a></span></div>
            </div>
            <div id="wb_icolocal">
               <div id="icolocal"><i class="fa fa-map-marker">&nbsp;</i></div></div>
            <div id="wb_txtacc">
               <div id="wb_uid19"><span id="wb_uid20"><em>La banque en ligne faite pour vous&nbsp;!</em></span></div>
            </div>
            <div id="wb_logo">
               <a href="./../index.php"><img src="../images/logo.png" id="logo" alt=""></a></div>
         </div>
         <div id="Nav">
            <ul class="navbar">
               <li><a href="./../index.php"><img alt="Acceuil" title="Acceuil" src="../images/img0003_over.png"><span><img alt="Acceuil" title="Acceuil" src="../images/img0003.png"></span></a></li>
               <li><a href="./../comptes/"><img alt="Comptes" title="Comptes" src="../images/img0027_over.png"><span><img alt="Comptes" title="Comptes" src="../images/img0027.png"></span></a></li>
               <li><a href="./../prets/"><img alt="Pr&#234;ts" title="Pr&#234;ts" src="../images/img0044_over.png"><span><img alt="Pr&#234;ts" title="Pr&#234;ts" src="../images/img0044.png"></span></a></li>
               <li><a href="./../agences/"><img alt="Agences" title="Agences" src="../images/img0045_over.png"><span><img alt="Agences" title="Agences" src="../images/img0045.png"></span></a></li>
               <li><a href="./../contact/contact.php"><img alt="Contacts" title="Contacts" src="../images/img0046_over.png"><span><img alt="Contacts" title="Contacts" src="../images/img0046.png"></span></a></li>
               <li><a href="./../a_propos/"><img alt="A propos" title="A propos" src="../images/img0047_over.png"><span><img alt="A propos" title="A propos" src="../images/img0047.png"></span></a></li>
            </ul>
         </div>
      </div>
   </div>
</body>
</html>