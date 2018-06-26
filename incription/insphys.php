<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Nouveau compte - Physique</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" l'une="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="robots" content="index, follow">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../css/font-awesome.min.css" rel="stylesheet">
<link href="../css/BIO_V1.css" rel="stylesheet">
<link href="../css/insphys.css" rel="stylesheet">
</head>
<body>
   <div id="container">
      <div id="wb_Breadcrumb2">
         <ul id="Breadcrumb2">
            <li><a href="./../administrator/conf/Categorie_de_poste.php" title="xx"><i class="fa fa-home">&nbsp;</i>Acceuil</a></li>
            <li><a href="./inscription.html" title="&lt;x"><i class="fa fa-inbox">&nbsp;</i>Inscription</a></li>
            <li class="active"><i class="fa fa-address-card-o">&nbsp;</i> Client physique</li>
         </ul>
      </div>
      <div id="Layer4">
         <div id="wb_Shape2">
            <img src="../images/img0014.png" id="Shape2" alt=""></div>
         <label for="" id="Label3">Ouverture de compte</label>
      </div>
      <div id="Layer2">
         <input type="text" id="jd" name="eee" value="" placeholder="1">
         <label for="" id="Label4">Identification client - Informations personnelles</label>
         <input type="text" id="Editbox2" name="edtnam" value="" tabindex="1" placeholder="Nom*">
         <input type="text" id="Editbox6" name="eee" value="" placeholder="1">
         <input type="text" id="Editbox7" name="eee" value="" placeholder="1">
         <select name="titre" size="1" id="Combobox1" tabindex="0" autofocus="">
            <option value="M.">M.*</option>
            <option value="mme">Mme*</option>
            <option value="mlle">Mlle*</option>
            <option value="dr">Dr.*</option>
            <option value="prof">Prof.*</option>
         </select>
         <div id="wb_Text1">
            <div id="wb_uid0"><span id="wb_uid1">Titre: </span></div>
         </div>
         <input type="text" id="Editbox3" name="edtprenom" value="" tabindex="2" placeholder="Pr&#233;nom*">
         <div id="Layer3">
            <div id="wb_Text2">
               <div id="wb_uid2"><span id="wb_uid3">Mode identification:</span></div>
            </div>
            <input type="radio" id="RadioButton1" name="Name" value="on" checked="" autofocus="">
            <div id="wb_Text3">
               <div id="wb_uid4"><span id="wb_uid5">CNI</span></div>
            </div>
            <input type="radio" id="RadioButton2" name="Name" value="on" required="">
            <div id="wb_Text4">
               <div id="wb_uid6"><span id="wb_uid7">Passeport</span></div>
            </div>
            <input type="radio" id="RadioButton3" name="Name" value="on">
            <div id="wb_Text5">
               <div id="wb_uid8"><span id="wb_uid9">Autre</span></div>
            </div>
            <input type="text" id="Editbox8" name="edtnam" value="" tabindex="1" placeholder="Titre*">
            <input type="text" id="Editbox4" name="edtnam" value="" tabindex="1" placeholder="N&#176; de pi&#232;ce d&#39;identit&#233;*">
         </div>
         <script language="javascript">         
         		function enleverSurlignage(element){
         			if (element){
         				if (element.nextSibling ){
         					if(element.nodeName != 'UL'){ //ul d'origine donc on ne cherche pas ses freres
         						var elementAPasser = element.nextSibling;
         						enleverSurlignage(elementAPasser);
         					}
         				}	
         				if (element.hasChildNodes()){
         					var elementAPasser = element.childNodes[0];
         					if(elementAPasser.nodeName == 'A'){
         						elementAPasser.style.textDecoration = "none";
         					}
         					enleverSurlignage(elementAPasser);
         				}
         			}
         		}
         		
         		function afficherImage( element, divAffichage)
         				{
         					
         					enleverSurlignage (element.parentNode.parentNode); //envoie balise ul
         					
         					var lien = element;
         					var id = lien.id;
         					var divImage = document.getElementById(divAffichage);
         					
         					if (divImage.hasChildNodes()){
         						divImage.removeChild(divImage.firstChild);
         					}
         					
         					//creation node
         					var hrefImg = id +".jpg";
         					var node = document.createElement('img');
         					node.id = id + "Image";
         					node.src = hrefImg;
         					node.alt = id;
         					
         					lien.style.textDecoration = 'underline';
         
         					divImage.appendChild(node);
         				}
         </script><input type="button" id="btnvalide" name="valide" value="Validé" disabled="" type="file">
         <div id="Layer1">
         </div>
         <div id="wb_Text6">
            <span id="wb_uid10"><a href="../WhatsApp Image 2018-06-26 at 13.37.58.jpeg">edit</a></span></div>
         <input type="file" id="FileUpload1" name="FileUpload1">
      </div>
   </div>
</body>
</html>