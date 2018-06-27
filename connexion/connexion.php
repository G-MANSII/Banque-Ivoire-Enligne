<?php 
   session_start();
      if( !empty($_POST) && $_POST["btnconnexion"] == "Connexion" ){
         
         $logUser = htmlspecialchars(trim($_POST["editlogin"]));
         $passUser = htmlspecialchars(trim($_POST["editpass"]));
         // vérifie si aucun des champs n'est vide
         if($logUser != "" && $passUser != "" ){
            
            // connexion à la base de donnée
            require_once("../bd/bd.php");
            $sql = 'SELECT * FROM sbrhtb004 WHERE email = :email AND pass= :pass';
            $query = $bd->prepare($sql);
            $query->execute( array( 
               "email" => $logUser,
               "pass" =>md5($passUser) ) );
            $resultat = $query->fetch();
            $count =$query->rowCount();

            $sql2 ='SELECT * FROM sbrhtb005 WHERE email = :email AND pass = :pass';
            $query2 = $bd->prepare($sql2);
            $query2->execute( array( 
               "email" => $logUser,
               "pass" =>md5($passUser) ) );
            $resultat2 = $query2->fetch();
            $count2 =$query2->rowCount();
                  //print_r($resultat);
                  //echo $count;
            if($count != 0){
               $id = $resultat["id_client_physique"];
               $_SESSION["id"] = $id;

               $root = explode("/",$_SERVER['PHP_SELF']);
               $location= "../profil/profil.php?id=$id";

               header("location:".$location);
               //header("location:index.php");
               exit();
            }else if($count2){
               $id = $resultat2["id_client_morale"];
               $_SESSION["id"] = $id;
               
               header("location:../profil/profil.php?id=$id");
               exit();
            }else{
               $erreur = "Login ou Mot de passe incorrect \n Veuillez réessayer SVP";
            header("location:/Banque-Ivoire-Enligne/profil/profil.php");
               exit();
            }

         }else{
            echo 'videeeeeeeeeeee';
            $erreur = "Veuillez remplir tous les champs";
         }   
      }else{
         echo "avant dernier if";
      }
   
?>

 
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Connexion</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" lune="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FRonline bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/BIO_V1.css" rel="stylesheet">
<link href="../css/connexion.css" rel="stylesheet">
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
         <div id="wb_Breadcrumb2">
            <ul id="Breadcrumb2">
               <li><a href="./../index.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
               <li class="active"><i class="fa fa-sign-in">&nbsp;</i>Connexion</li>
            </ul>
         </div>
         <form name="Layer1" method="POST" action="" id="Layer1">
            <input type="password" id="edtpass" name="editpass" value="" maxlength="" tabindex="2" placeholder="Mot de passe">
            <input type="text" id="edtlogin" name="editlogin" value="" tabindex="1" placeholder="Login">
            <label for="" id="Label2">Renseignez votre login et mot de passe</label>
            <div id="wb_linklogoub">
               <div id="wb_uid0"><span id="wb_uid1"><a href="./../Temples/form.html">Login oublié&nbsp;?</a></span></div>
            </div>
            <div id="wb_link_passoub">
               <div id="wb_uid2"><span id="wb_uid3"><a href="./../Temples/form.html">Mot de passe oublié&nbsp;?</a></span></div>
            </div>
            <input type="submit" id="btnconnexion" name="btnconnexion" value="Connexion">
         </form>
         <div id="Layer2">
            <div id="wb_Shape2">
               <img src="../images/img0010.png" id="Shape2" alt=""></div>
            <label for="" id="Label3">Acceder à votre compte</label>
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
               <div id="wb_uid4"><span id="wb_uid5"><a href="./../index1.php">Banque prêt de chez vous&nbsp;!</a></span></div>
            </div>
            <div id="wb_icolocal">
               <div id="icolocal"><i class="fa fa-map-marker">&nbsp;</i></div></div>
            <div id="wb_txtacc">
               <div id="wb_uid6"><span id="wb_uid7"><em>La banque en ligne faite pour vous&nbsp;!</em></span></div>
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
               <li><a href="./../contact/contact.php"><img alt="Contacts" title="Contacts" src="../images/img0046_over.png"><span><img alt="Contacts" title="Contacts" src="../images/img0046.png"></span></a></li>
               <li><a href="./../a_propos/"><img alt="A propos" title="A propos" src="../images/img0047_over.png"><span><img alt="A propos" title="A propos" src="../images/img0047.png"></span></a></li>
            </ul>
         </div>
      </div>
   </div>
</body>
</html>