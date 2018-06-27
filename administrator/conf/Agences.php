<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Agences</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" l'une="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" l'une="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FRonline bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../../css/excite-bike/jquery-ui.min.css" rel="stylesheet">
<link href="../../css/font-awesome.min.css" rel="stylesheet">
<link href="../../css/BIO_V1.css" rel="stylesheet">
<link href="../../css/Agences.css" rel="stylesheet">
<script src="../../java-script/jquery-1.12.4.min.js"></script>
<script src="../../java-script/jquery.ui.core.min.js"></script>
<script src="../../java-script/jquery.ui.widget.min.js"></script>
<script src="../../java-script/jquery.ui.mouse.min.js"></script>
<script src="../../java-script/jquery.ui.button.min.js"></script>
<script src="../../java-script/jquery.ui.draggable.min.js"></script>
<script src="../../java-script/jquery.ui.position.min.js"></script>
<script src="../../java-script/jquery.ui.resizable.min.js"></script>
<script src="../../java-script/jquery.ui.dialog.min.js"></script>
<script src="../../java-script/jquery.ui.effect.min.js"></script>
<script src="../../java-script/jquery.ui.effect-drop.min.js"></script>
<script src="../../java-script/wwb11.min.js"></script>
<script>   
   $(document).ready(function()
   {
      var modalOpts =
      {
         modal: true,
         width: 968,
         height: 269,
         position: { my: 'center', at: 'center', of: window },
         resizable: false,
         draggable: false,
         closeOnEscape: true,
         show: {effect: 'drop', direction: 'up'},
         hide: {effect: 'drop', direction: 'up'},
         autoOpen: false
      };
      $("#modal").dialog(modalOpts);
      $('.ui-dialog-titlebar').hide();
      $('.ui-dialog').removeClass('ui-corner-all');
      $('#modal').css({'padding':'0','height':'269px'});
      $("#modal-close").click( function()
      {
         $("#modal").dialog('close');
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
<<<<<<< HEAD
      <div id="zone">
         <form name="Layer1" method="post" action=""  id="Layer1">
            <input type="text" id="edtlogin" name="nom" value="" tabindex="1" placeholder="Nom agence">
            <label for="" id="Label2">Base de données - Agences</label>
            <input type="submit" id="btnconnexion" name="btnAjouter" value="Ajouter">nom
            <div id="Layer3">
               <table id="Table1">
                  <tr>
                     <td class="cell0"><span id="wb_uid0">Nom agence </span></td>
                     <td class="cell1"><span id="wb_uid1">Date de creation </span></td>
                     <td class="cell0"><span id="wb_uid2">Adresse </span></td>
                     <td class="cell0"><span id="wb_uid3">Numero </span></td>
                     <td class="cell2"><span id="wb_uid4">Email </span></td>
                     <td class="cell0"><span id="wb_uid3">Mod </span></td>
                     <td class="cell2"><span id="wb_uid4">Sup</span></td>
                  </tr>
                  <?php 
                     $sql2 = "SELECT * FROM sbrhtb013 ";
                     $query2 = $bd->query($sql2);
                     $i=0;
                     while($row = $query2->fetch()){
                        $color = $i%2==0 ? "#1E90FF": "#D2691E";
                        $i = $i+1;
                        echo "<tr style='background-color:$color'>";
                        echo "<td class='cell0'><span style='color:white' id='wb_uid4'>".$row['libelleagence']." </span></td>";
                        echo "<td class='cell1'><span style='color:white' id='wb_uid4'>".$row['date_creation']." </span></td>";
                        echo "<td class='cell2'><span style='color:white' id='wb_uid4'>".$row['adresse']." </span></td>";
                        echo "<td class='cell2'><span style='color:white' id='wb_uid4'>".$row['numero']." </span></td>";
                        echo "<td class='cell2'><span style='color:white' id='wb_uid4'>".$row['email']." </span></td>";
                        echo "<td class='cell2'><span  style='color:white' id='wb_uid4'><a style='text-decoration:none;color:white'  href='modAg.php?id={$row['id_agence']}'>&nbsp;&nbsp;<i class='fa fa-edit'></i></a></span></td>";
                        echo "<td class='cell2'><span style='color:white' id='wb_uid4'><a style='text-decoration:none;color:white' href='supAg.php?id={$row['id_agence']}'>&nbsp;&nbsp;<i class='fa fa-trash'></i></a></span></td>";
                        echo "</tr>";
                     }
                   ?>
                 
               </table>
            </div>
            <div id="txt_pk">
               <hr id="Line2e">
               <div id="wb_Headi">
                  <h1 id="Headi">Liste des Agences existantes</h1></div>
               <hr id="Line1a">
            </div>
            <input type="submit" id="Button1" name="btnmodif" value="Modifier">
            <input type="submit" id="Button2" name="btnsuppr" value="Supprimer">
            <input type="date" id="Editbox1" name="date" value="" tabindex="1" placeholder="Date cr&#233;ation">
            <input type="text" id="Editbox2" name="adress" value="" tabindex="1" placeholder="Adresse">
            <input type="number" id="Editbox3" min="1"  max="100" name="numero" value="" tabindex="1" placeholder="Numero">
            <input type="email" id="Editbox4" name="email" value="" tabindex="1" placeholder="Email">
         </form>
         <div id="wb_Breadcrumb2">
            <ul id="Breadcrumb2">
               <li><a href="./../../index.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
               <li><a href="./../admin.php" title="Administration"><i class="fa fa-database">&nbsp;</i>Administration</a></li>
               <li><a href="./../admin.php" title="Config"><i class="fa fa-sticky-note">&nbsp;</i>Config</a></li>
               <li class="active"><i class="fa fa-renren">&nbsp;</i>Agences</li>
            </ul>
         </div>
         <div id="Layer2">
            <div id="wb_Shape2">
               <img src="../../images/img0034.png" id="Shape2" alt=""></div>
            <label for="" id="Label3">Administration</label>
=======
      <form name="Layer1" method="post" action="" enctype="text/plain" id="Layer1">
         <input type="text" id="edtlogin" name="Nom" value="" tabindex="1" placeholder="Nom">
         <label for="" id="Label2">Base de données - Agences</label>
         <input type="submit" id="btnconnexion" name="Ajouter" value="Ajouter">
         <div id="Layer3">
            <hr id="Line2">
            <div id="wb_Heading1">
               <h1 id="Heading1">Liste des Agences existantes</h1></div>
            <hr id="Line1">
>>>>>>> f336b5ced1f3f3af2f0e29c387cd011da8ba4e79
         </div>
         <input type="text" id="Editbox2" name="Adresse" value="" tabindex="1" placeholder="adresse">
         <input type="submit" id="Button2" name="suppri" value="Supprimer">
         <table id="Table1">
            <tr>
               <td class="cell0"><span id="wb_uid0"> </span></td>
               <td class="cell0"><span id="wb_uid1"> </span></td>
               <td class="cell0"><span id="wb_uid2"> </span></td>
               <td class="cell0"><span id="wb_uid3"> </span></td>
               <td class="cell0"><span id="wb_uid4"> </span></td>
               <td class="cell1"><span id="wb_uid5"> </span></td>
            </tr>
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
               <td class="cell2"><span id="wb_uid24"> </span></td>
               <td class="cell2"><span id="wb_uid25"> </span></td>
               <td class="cell2"><span id="wb_uid26"> </span></td>
               <td class="cell2"><span id="wb_uid27"> </span></td>
               <td class="cell2"><span id="wb_uid28"> </span></td>
               <td class="cell3"><span id="wb_uid29"> </span></td>
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
               <td class="cell0"><span id="wb_uid36"> </span></td>
               <td class="cell0"><span id="wb_uid37"> </span></td>
               <td class="cell0"><span id="wb_uid38"> </span></td>
               <td class="cell0"><span id="wb_uid39"> </span></td>
               <td class="cell0"><span id="wb_uid40"> </span></td>
               <td class="cell1"><span id="wb_uid41"> </span></td>
            </tr>
            <tr>
               <td class="cell4"><span id="wb_uid42"> </span></td>
               <td class="cell4"><span id="wb_uid43"> </span></td>
               <td class="cell4"><span id="wb_uid44"> </span></td>
               <td class="cell4"><span id="wb_uid45"> </span></td>
               <td class="cell4"><span id="wb_uid46"> </span></td>
               <td class="cell5"><span id="wb_uid47"> </span></td>
            </tr>
         </table>
         <input type="email" id="Editbox4" name="email" value="" tabindex="1" placeholder="Email">
         <input type="tel" id="Editbox3" name="numero" value="" tabindex="1" placeholder="Numero">
         <div id="wb_btn_connexionp">
            <a href="./../update_email.php" onclick="$('#modal').dialog('open');return false;"><div id="btn_connexionp"><div id="btn_connexionp_text"><span id="wb_uid48"><strong>Modifier</strong></span></div></div></a></div>
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
      <form name="frmmodifier" method="post" action="" enctype="text/plain" id="modal" title="modal">
         <input type="text" id="Editbox5" name="Nom" value="" tabindex="1" placeholder="Nom">
         <input type="date" id="Editbox6" name="date" value="" tabindex="1" placeholder="Date de cr&#233;ation">
         <input type="text" id="Editbox7" name="Adresse" value="" tabindex="1" placeholder="adresse">
         <input type="email" id="Editbox8" name="email" value="" tabindex="1" placeholder="Email">
         <input type="tel" id="Editbox9" name="numero" value="" tabindex="1" placeholder="Numero">
         <input type="submit" id="Button4" onclick="$('#modal').dialog('close');return false;" name="Mise à jour" value="Mise à jour">
         <a id="modal-close"> </a>
      </form>
      <div id="Div">
         <div id="head">
            <div id="wb_band">
               <img src="../../images/img0001.png" id="band" alt="Banque Ivoire Online" title="Banque Ivoire Online"></div>
            <input type="text" id="edit_reche" name="search" value="" placeholder="Recherche...">
            <div id="wb_icosear">
               <a href="./Categorie_de_poste.php"><div id="icosear"><i class="fa fa-search">&nbsp;</i></div></a></div>
            <div id="wb_local">
               <div id="wb_uid49"><span id="wb_uid50"><a href="./Categorie_de_poste.php">Banque prêt de chez vous&nbsp;!</a></span></div>
            </div>
            <div id="wb_icolocal">
               <div id="icolocal"><i class="fa fa-map-marker">&nbsp;</i></div></div>
            <div id="wb_txtacc">
               <div id="wb_uid51"><span id="wb_uid52"><em>La banque en ligne faite pour vous&nbsp;!</em></span></div>
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