<?php 
require_once("../../bd/bd.php");

   if(!empty($_POST["Ajouter"]) || $_POST["Ajouter"] == "Envoyer"){
      if(!empty($_POST["Nom"]) && !empty($_POST["date"]))
      { 
         $nom = htmlspecialchars(trim($_POST["Nom"]));
         $date = htmlspecialchars(trim($_POST["date"]));
         
         $sql = "INSERT INTO sbrhtb042 (Nom,date_dajout) VALUES(:nom,:dat)";
         $query = $bd->prepare($sql);
         $query->execute(
            array(
               'nom' =>$nom , 
               'dat' =>$date
            )
         );
      } else {
            $erreur = "Veuille remplir tous les champs";
      }
   }

?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Categorie de poste</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FRonline bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../../css/font-awesome.min.css" rel="stylesheet">
<link href="../../css/BIO_V1.css" rel="stylesheet">
<link href="../../css/Categorie_de_poste.css" rel="stylesheet">
<script src="../../java-script/jquery-1.12.4.min.js"></script>
<script>   
   $(document).ready(function()
   {
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
<!-- Start of biohelp Zendesk Widget script -->
<script>   /*<![CDATA[*/window.zE||(function(e,t,s){var n=window.zE=window.zEmbed=function(){n._.push(arguments)}, a=n.s=e.createElement(t),r=e.getElementsByTagName(t)[0];n.set=function(e){ n.set._.push(e)},n._=[],n.set._=[],a.async=true,a.setAttribute("charset","utf-8"), a.src="https://static.zdassets.com/ekr/asset_composer.js?key="+s, n.t=+new Date,a.type="text/javascript",r.parentNode.insertBefore(a,r)})(document,"script","920064d9-b4f5-46ec-b48c-bef256a7e182");/*]]>*/
</script>
<!-- End of biohelp Zendesk Widget script -->
</head>
<body>
   <div id="container">
      <div id="foot">
         <div id="foot_Container">
            <div id="wb_JavaScript1">
               <div id="copyrightnotice"></div>
               <script>               
                  var now = new Date();
                  var startYear = "2017";
                  var text =  "Copyright &copy; ";
                  if (startYear != '')
                  {
                     text = text + startYear + "-";
                  }
                  text = text + now.getFullYear() + ", Miage 2018. Tous droits réservés.";
                  var copyrightnotice = document.getElementById('copyrightnotice');
                  copyrightnotice.innerHTML = text;
               </script>

            </div>
         </div>
      </div>
      <form name="Layer1" method="post" action="" id="Layer1">
         <input type="text" id="edtlogin" name="Nom" value="" tabindex="1" placeholder="Nom">
         <label for="" id="Label2">Base de données - Categorie de poste</label>
         <input type="submit" id="btnconnexion" name="Ajouter" value="Ajouter">
         <div id="Layer3">
            <hr id="Line2">
            <hr id="Line1">
            <div id="wb_Heading1">
               <h1 id="Heading1">Liste des Categorie de postes existants</h1></div>
         </div>
         <input type="date" id="Editbox1" name="date" value="" tabindex="1" autocomplete="off" placeholder="Date de cr&#233;ation">
         <table id="Table1" style="text-align:center;">
            <tr>
               <td class="cell0"><span id="wb_uid0">nom  </span></td>
               <td class="cell0"><span id="wb_uid1"> date</span></td>
               <td class="cell0"><span id="wb_uid1"> mod</span></td>
               <td class="cell0"><span id="wb_uid1">sup </span></td>
            </tr>
            <?php 
               $sql2 = "SELECT * FROM sbrhtb042 ORDER BY id_categorie_poste DESC LIMIT 5";
               $query2 = $bd->query($sql2);
               $i=0;
               while($row = $query2->fetch()){
                  $color = $i%2==0 ? "#1E90FF": "#D2691E";
                  $i = $i+1;
                  echo "<tr style='background-color:$color'>";
                  echo "<td class='cell0'><span style='color:white' id='wb_uid4'>".$row['Nom']." </span></td>";
                  echo "<td class='cell0'><span style='color:white' id='wb_uid4'>".$row['date_dajout']." </span></td>";
                  echo "<td class='cell0'><span style='color:white' id='wb_uid4'><a href='modCatPoste.php?id=$row[0]' ><i class='fa fa-edit'></i></a> </span></td>";
                  echo "<td class='cell0'><span style='color:white' id='wb_uid4'><a href='supCatPoste.php?id=$row[0]' ><i class='fa fa-trash'></i></a> </span></td>";
                  echo "</tr>";
               } 
            ?>
            <tr>
               <td class="cell0"><span id="wb_uid6"> </span></td>
               <td class="cell0"><span id="wb_uid7"> </span></td>
               <td class="cell0"><span id="wb_uid8"> </span></td>
               <td class="cell0"><span id="wb_uid9"> </span></td>
               <td class="cell0"><span id="wb_uid10"> </span></td>
               <td class="cell1"><span id="wb_uid11"> </span></td>
            </tr>
         </table>
      </form>
      <div id="wb_Breadcrumb2">
         <ul id="Breadcrumb2">
            <li><a href="./../../index.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
            <li><a href="" title="Administration"><i class="fa fa-database">&nbsp;</i>Administration</a></li>
            <li><a href="./../admin.php" title="Config"><i class="fa fa-window-restore">&nbsp;</i>Config</a></li>
            <li class="active"><i class="fa fa-ticket">&nbsp;</i>Categories de poste</li>
         </ul>
      </div>
      <div id="Layer2">
         <div id="wb_Shape2">
            <img src="../../images/img0002.png" id="Shape2" alt=""></div>
         <label for="" id="Label3">Categorie de poste</label>
      </div>
      <div id="Divi">
         <div id="head">
            <div id="wb_band">
               <img src="../../images/img0001.png" id="band" alt="Banque Ivoire Online" title="Banque Ivoire Online"></div>
            <input type="text" id="edit_reche" name="search" value="" placeholder="Recherche...">
            <div id="wb_icosear">
               <a href="./Categorie_de_poste.php"><div id="icosear"><i class="fa fa-search">&nbsp;</i></div></a></div>
            <div id="wb_local">
               <div id="wb_uid42"><span id="wb_uid43"><a href="./../../agences/">Banque prêt de chez vous&nbsp;!</a></span></div>
            </div>
            <div id="wb_icolocal">
               <div id="icolocal"><i class="fa fa-map-marker">&nbsp;</i></div></div>
            <div id="wb_txtacc">
               <div id="wb_uid44"><span id="wb_uid45"><em>La banque en ligne faite pour vous&nbsp;!</em></span></div>
            </div>
            <div id="wb_logo">
               <a href="./../../index.php"><img src="../../images/logo.png" id="logo" alt=""></a></div>
         </div>
         <div id="Nav">
            <ul class="navbar">
               <li><a href="./../../index.php"><img alt="Acceuil" title="Acceuil" src="../../images/img0003_over.png"><span><img alt="Acceuil" title="Acceuil" src="../../images/img0003.png"></span></a></li>
               <li><a href="./../../comptes/"><img alt="Comptes" title="Comptes" src="../../images/img0027_over.png"><span><img alt="Comptes" title="Comptes" src="../../images/img0027.png"></span></a></li>
               <li><a href="./../../prets/"><img alt="Pr&#234;ts" title="Pr&#234;ts" src="../../images/img0044_over.png"><span><img alt="Pr&#234;ts" title="Pr&#234;ts" src="../../images/img0044.png"></span></a></li>
               <li><a href="./../../agences/"><img alt="Agences" title="Agences" src="../../images/img0045_over.png"><span><img alt="Agences" title="Agences" src="../../images/img0045.png"></span></a></li>
               <li><a href="./../../contact/contact.php"><img alt="Contacts" title="Contacts" src="../../images/img0046_over.png"><span><img alt="Contacts" title="Contacts" src="../../images/img0046.png"></span></a></li>
               <li><a href="./../../a_propos/"><img alt="A propos" title="A propos" src="../../images/img0047_over.png"><span><img alt="A propos" title="A propos" src="../../images/img0047.png"></span></a></li>
            </ul>
         </div>
      </div>
   </div>
</body>
</html>