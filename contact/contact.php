<?php 
    require_once("../bd/bd.php");
    
    if(!empty($_POST)){
      if($_POST["send"] == "Send"){
       echo 'jfnjf';
      }else{
       
      }
    }
    
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Contact</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FRonline bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/BIO_V1.css" rel="stylesheet">
<link href="../css/contact.css" rel="stylesheet">
<script src="../java-script/jquery-1.12.4.min.js"></script>
<script>   
   $(document).ready(function()
   {
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
</script>
</head>
<body>
   <div id="container">
      <div id="foot">
         <div id="foot_Container">
         </div>
      </div>
      <div id="zone">
         <form name="Layer1" method="post" action="" id="Layer1">
            <label for="" id="Z">Renseignez votre login et mot de passe</label>
            <div id="wb_Form1">
               <form name="contact" method="post" action="" id="Form1">
                  <label for="Combobox1" id="Label1">Prefix:</label>
                  <select name="prefix" size="1" id="Combobox1">
                     <option selected="" value="Mr.">Mr.</option>
                     <option value="Mrs.">Mrs.</option>
                     <option value="Miss">Miss</option>
                     <option value="Ms.">Ms.</option>
                     <option value="Dr.">Dr.</option>
                  </select>
                  <label for="Editbox1" id="Label2">First Name:</label>
                  <input type="text" id="Editbox1" name="firstname" value="">
                  <label for="Editbox2" id="Label3">Last Name:</label>
                  <input type="text" id="Editbox2" name="lastname" value="">
                  <label for="Editbox3" id="Label4">Email:</label>
                  <input type="text" id="Editbox3" name="email" value="">
                  <label for="Combobox2" id="Label5">Will you be attending the event?</label>
                  <select name="attend" size="1" id="Combobox2">
                     <option selected="" value="Yes">Yes</option>
                     <option value="No">No</option>
                  </select>
                  <label for="Combobox3" id="Label6">Number of Guests:</label>
                  <select name="guestcount" size="1" id="Combobox3">
                     <option selected="" value="1">1</option>
                     <option value="2">2</option>
                     <option value="3">3</option>
                     <option value="4">4</option>
                     <option value="5">5</option>
                  </select>
                  <input type="submit" id="Button1" name="send" value="Send">
               </form>
            </div>
         </form>
         <div id="wb_Breadcrumb2">
            <ul id="Breadcrumb2">
               <li><a href="./../index.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
               <li class="active"><i class="fa fa-paper-plane-o">&nbsp;</i>Contact</li>
            </ul>
         </div>
         <div id="Layer2">
            <div id="wb_Shape2">
               <img src="../images/img0036.png" id="Shape2" alt=""></div>
            <label for="" id="Label8">Contact</label>
         </div>
         <div id="wb_TEXT">
            <span id="wb_uid0">Enttrer un email valide pour recevoir nos reponses du support technique.</span>
         </div>
      </div>
      <div id="divhead">
         <div id="head">
            <div id="wb_band">
               <img src="../images/img0001.png" id="band" alt="Banque Ivoire Online" title="Banque Ivoire Online"></div>
            <input type="text" id="edit_reche" name="search" value="" placeholder="Recherche...">
            <div id="wb_icosear">
               <a href="./../index1.php"><div id="icosear"><i class="fa fa-search">&nbsp;</i></div></a></div>
            <div id="wb_local">
               <div id="wb_uid1"><span id="wb_uid2"><a href="./../index1.php">Banque prêt de chez vous&nbsp;!</a></span></div>
            </div>
            <div id="wb_icolocal">
               <div id="icolocal"><i class="fa fa-map-marker">&nbsp;</i></div></div>
            <div id="wb_txtacc">
               <div id="wb_uid3"><span id="wb_uid4"><em>La banque en ligne faite pour vous&nbsp;!</em></span></div>
            </div>
            <div id="wb_logo">
               <a href="./../index.php"><img src="../images/logo.png" id="logo" alt=""></a></div>
         </div>
         <div id="NavigationBar1">
            <ul class="navbar">
               <li><a href="./../index.php"><img alt="Acceuil" title="Acceuil" src="../images/img0003_over.png"><span><img alt="Acceuil" title="Acceuil" src="../images/img0003.png"></span></a></li>
               <li><a href="./../comptes/"><img alt="Comptes" title="Comptes" src="../images/img0027_over.png"><span><img alt="Comptes" title="Comptes" src="../images/img0027.png"></span></a></li>
               <li><a href="./../prets/"><img alt="Pr&#234;ts" title="Pr&#234;ts" src="../images/img0044_over.png"><span><img alt="Pr&#234;ts" title="Pr&#234;ts" src="../images/img0044.png"></span></a></li>
               <li><a href="./../agences/"><img alt="Agences" title="Agences" src="../images/img0045_over.png"><span><img alt="Agences" title="Agences" src="../images/img0045.png"></span></a></li>
               <li><a href="./contact.php"><img alt="Contacts" title="Contacts" src="../images/img0046_over.png"><span><img alt="Contacts" title="Contacts" src="../images/img0046.png"></span></a></li>
               <li><a href="./../a_propos/"><img alt="A propos" title="A propos" src="../images/img0047_over.png"><span><img alt="A propos" title="A propos" src="../images/img0047.png"></span></a></li>
            </ul>
         </div>
      </div>
   </div>
</body>
</html>