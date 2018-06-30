<?php 
require_once("../../bd/bd.php");

if (!empty($_POST["Ajouter"])) {
      if (!empty($_POST["Nom"]) && !empty($_POST["date"]) &&
            !empty($_POST["Adresse"]) && !empty($_POST["email"]) && !empty($_POST["numero"])) {
            echo 'bn bgbgjnbjngjn jgnbgjnjn ';
            $nom = htmlspecialchars(trim($_POST["Nom"]));
            $date = htmlspecialchars(trim($_POST["date"]));
            $adress = htmlspecialchars(trim($_POST["Adresse"]));
            $email = htmlspecialchars(trim($_POST["email"]));
            $numero = htmlspecialchars(trim($_POST["numero"]));

            $sql = "INSERT INTO sbrhtb013(libelleagence,date_creation,adresse,numero,email) VALUES(:lib,:dat,:add,:num,:em)";
            $query = $bd->prepare($sql);
            $query->execute(
                  array(
                        'lib' => $nom,
                        'dat' => $date,
                        'add' => $adress,
                        'num' => $numero,
                        'em' => $email
                  )
            );

      } else {
            $erreur = "Veuille remplir tous les champs";
      }

} else {
}

?>

<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Agences</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FRonline bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../../css/font-awesome.min.css" rel="stylesheet">
<link href="../../css/BIO_V1.css" rel="stylesheet">
<link href="../../css/Agences.css" rel="stylesheet">
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
      <form name="Layer1" method="post" action="" enctype="text/plain" id="Layer1">
         <input type="text" id="edtlogin" name="Nom" value="" tabindex="1" placeholder="Nom">
         <label for="" id="Label2">Base de données - Agences</label>
         <input type="submit" id="btnconnexion" name="Ajouter" value="Ajouter">
         <div id="Layer3">
            <hr id="Line2">
            <div id="wb_Heading1">
               <h1 id="Heading1">Liste des Agences existantes</h1></div>
            <hr id="Line1">
         </div>
         <input type="text" id="Editbox2" name="Adresse" value="" tabindex="1" placeholder="adresse">
         <table id="Table1">
            <tr>
               <td class="cell0"><span id="wb_uid0"> </span></td>
               <td class="cell0"><span id="wb_uid1"> </span></td>
               <td class="cell0"><span id="wb_uid2"> </span></td>
               <td class="cell0"><span id="wb_uid3"> </span></td>
               <td class="cell0"><span id="wb_uid4"> </span></td>
               <td class="cell1"><span id="wb_uid5"> </span></td>
            </tr>
     <?php 
      $sql2 = "SELECT * FROM sbrhtb013 ORDER BY id_agence DESC LIMIT 5 ";
      $query2 = $bd->query($sql2);
      $i = 0;
      while ($row = $query2->fetch()) {
            $color = $i % 2 == 0 ? "#1E90FF" : "#D2691E";
            $i = $i + 1;
            echo "<tr style='background-color:$color'>";
            echo "<td class='cell0'><span style='color:white' id='wb_uid4'>" . $row['libelleagence'] . " </span></td>";
            echo "<td class='cell0'><span style='color:white' id='wb_uid4'>" . $row['date_creation'] . " </span></td>";
            echo "<td class='cell0'><span style='color:white' id='wb_uid4'>" . $row['adresse'] . " </span></td>";
            echo "<td class='cell0'><span style='color:white' id='wb_uid4'>" . $row['numero'] . " </span></td>";
            echo "<td class='cell0'><span style='color:white' id='wb_uid4'>" . $row['email'] . " </span></td>";
            echo "<td class='cell0'><span  style='color:white' id='wb_uid4'><a style='text-decoration:none;color:white'  href='modAg.php?id={$row['id_agence']}'>&nbsp;&nbsp;<i class='fa fa-edit'></i></a></span></td>";
            echo "<td class='cell0'><span style='color:white' id='wb_uid4'><a style='text-decoration:none;color:white' href='supAg.php?id={$row['id_agence']}'>&nbsp;&nbsp;<i class='fa fa-trash'></i></a></span></td>";
            echo "</tr>";
      } ?>

            <tr>
               <td class="cell0"><span id="wb_uid6"> </span></td>
               <td class="cell0"><span id="wb_uid7"> </span></td>
               <td class="cell0"><span id="wb_uid8"> </span></td>
               <td class="cell0"><span id="wb_uid9"> </span></td>
               <td class="cell0"><span id="wb_uid10"> </span></td>
               <td class="cell1"><span id="wb_uid11"> </span></td>
            </tr>
            <tr>
               <td class="cell0"><span id="wb_uid12"> </span></td>
               <td class="cell0"><span id="wb_uid13"> </span></td>
               <td class="cell0"><span id="wb_uid14"> </span></td>
               <td class="cell0"><span id="wb_uid15"> </span></td>
               <td class="cell0"><span id="wb_uid16"> </span></td>
               <td class="cell1"><span id="wb_uid17"> </span></td>
            </tr>
            <tr>
               <td class="cell0"><span id="wb_uid18"> </span></td>
               <td class="cell0"><span id="wb_uid19"> </span></td>
               <td class="cell0"><span id="wb_uid20"> </span></td>
               <td class="cell0"><span id="wb_uid21"> </span></td>
               <td class="cell0"><span id="wb_uid22"> </span></td>
               <td class="cell1"><span id="wb_uid23"> </span></td>
            </tr>
            <tr>
               <td class="cell0"><span id="wb_uid24"> </span></td>
               <td class="cell0"><span id="wb_uid25"> </span></td>
               <td class="cell0"><span id="wb_uid26"> </span></td>
               <td class="cell0"><span id="wb_uid27"> </span></td>
               <td class="cell0"><span id="wb_uid28"> </span></td>
               <td class="cell1"><span id="wb_uid29"> </span></td>
            </tr>
            <tr>
               <td class="cell0"><span id="wb_uid30"> </span></td>
               <td class="cell0"><span id="wb_uid31"> </span></td>
               <td class="cell0"><span id="wb_uid32"> </span></td>
               <td class="cell0"><span id="wb_uid33"> </span></td>
               <td class="cell0"><span id="wb_uid34"> </span></td>
               <td class="cell1"><span id="wb_uid35"> </span></td>
            </tr>
            <tr>
               <td class="cell2"><span id="wb_uid36"> </span></td>
               <td class="cell2"><span id="wb_uid37"> </span></td>
               <td class="cell2"><span id="wb_uid38"> </span></td>
               <td class="cell2"><span id="wb_uid39"> </span></td>
               <td class="cell2"><span id="wb_uid40"> </span></td>
               <td class="cell3"><span id="wb_uid41"> </span></td>
            </tr>
         </table>
         <input type="email" id="Editbox4" name="email" value="" tabindex="1" placeholder="Email">
         <input type="tel" id="Editbox3" name="numero" value="" tabindex="1" placeholder="Numero">
         <select name="ville" size="1" id="ContratsCombobox1">
            <option selected="" value="Ville">Ville</option>
         </select>
         <select name="pays" size="1" id="AgencesCombobox1">
            <option selected="" value="pays">Pays</option>
         </select>
      </form>
      <div id="wb_e">
         <ul id="e">
            <li><a href="./../../index.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
            <li><a href="" title="Administration"><i class="fa fa-database">&nbsp;</i>Administration</a></li>
            <li><a href="./../admin.php" title="Config"><i class="fa fa-window-restore">&nbsp;</i>Config</a></li>
            <li class="active"><i class="fa fa-map-pin">&nbsp;</i>Agence</li>
         </ul>
      </div>
      <div id="Layer2">
         <div id="wb_Shape2">
            <img src="../../images/img0076.png" id="Shape2" alt=""></div>
         <label for="" id="Label3">Agences</label>
      </div>
      <input type="date" id="Editbox1" name="date" value="" tabindex="1" placeholder="Date de cr&#233;ation">
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