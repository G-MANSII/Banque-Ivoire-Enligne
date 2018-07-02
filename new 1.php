require_once("../bd/bd.php");

 
if ( $_POST["valide"] == "Validé") {

     


      $titre = $_POST["titre"];
      $sexe = $_POST["sexe"];
      $nom = $_POST["edtnam"];
      $prenom = $_POST["edtprenom"];
         //$matrimoniale = htmlspecialchars(trim($_POST["matrimoniale"]));
      $conjoint = $_POST["conjoint"];
      $type_piece = $_POST["Name"];
      $photo = $_FILES["FileUpload1"]["name"];
      $numero_piece = $_POST["numeropiece"];
      $nationalite = $_POST["nationalite"];
      $naissance = $_POST["naissance"];
      $ville = $_POST["ville"];
      $lieu = $_POST["lieu"];
      $pays = $_POST["pays"];
      $adress_postale = $_POST["adresspost"];
      $profession = $_POST["profession"];
      $tel1 = $_POST["tel1"];
      $tel2 = $_POST["tel2"];
      $fix = $_POST["fix"];
        // $email = htmlspecialchars(trim($_POST["email"]));
      $type_compte = $_POST["Name1"];
         //$agence = htmlspecialchars(trim($_POST["titragence"];
      $document = $_FILES["FileUpload2"]["name"] . "," . $_FILES["FileUpload3"]["name"] . "," . $_FILES["FileUpload4"]["name"];
      $login = $_POST["login"];
      $pass = $_POST["motdepasse"];
        //CIAB-BIO-276363  023

      if (isset($_FILES['FileUpload1'], $_FILES['FileUpload2'], $_FILES['FileUpload3'], $_FILES['FileUpload4'])) {
            echo "no error";

            $infosfichier1 = pathinfo($_FILES['FileUpload1']['name']);
            $extension_upload1 = $infosfichier1['extension'];

            $infosfichier2 = pathinfo($_FILES['FileUpload2']['name']);
            $extension_upload2 = $infosfichier2['extension'];

            $infosfichier3 = pathinfo($_FILES['FileUpload3']['name']);
            $extension_upload3 = $infosfichier3['extension'];

            $infosfichier4 = pathinfo($_FILES['FileUpload4']['name']);
            $extension_upload4 = $infosfichier4['extension'];

            $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');

               //upload du fichier 1
            if (in_array($extension_upload1, $extensions_autorisees)) {
                  move_uploaded_file($_FILES['FileUpload1']['tmp_name'], "../users/physique/" . basename($_FILES['FileUpload1']['name']));
            } else {
                  $aa = "1 ";
            }

               //upload du fichier 2
            if (in_array($extension_upload2, $extensions_autorisees)) {
                  move_uploaded_file($_FILES['FileUpload2']['tmp_name'], "../users/physique/" . basename($_FILES['FileUpload2']['name']));
            } else {
                  $aa = $aa . " ";
            }

               //upload du fichier 3
            if (in_array($extension_upload3, $extensions_autorisees)) {
                  move_uploaded_file($_FILES['FileUpload3']['tmp_name'], "../users/physique/" . basename($_FILES['FileUpload3']['name']));
            } else {
                  $aa = $aa . " ";
            }

               //upload du fichier 4
            if (in_array($extension_upload4, $extensions_autorisees)) {
                  move_uploaded_file($_FILES['FileUpload4']['tmp_name'], "../users/physique/" . basename($_FILES['FileUpload4']['name']));
            } else {
                  $aa = $aa . " ";
            }

            if (!empty($aa)) {
                  $erreur = "Les fichieers doivent être des images";
            }

      } else {
            echo "aucun fichier selection";
            $erreur = "Erreur lors de l'upload du fichier";
      }
      

      if (empty($erreur)) {
            echo "fbhfhf";
            $sql = "INSERT INTO sbrhtb004(
            Titre,
            nom,
            prenom,
            sexe,
            Photo,
            date_de_naissance,
            nationnalite,
            profession,
            adresse_postale,
            ville_de_residence,
            pays_de_residence,
            numero,
            nom_du_conjoint,
            mode_didentification,
            numero_piece,
            lieu_de_naissance,
            type_de_compte,
            documents_a_fournir,
            nom_utilisateur,
            mot_de_passe)
            VALUES(? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,? ,?)";
            $query = $bd->prepare($sql);
            $query->execute(
                  array(
                        $titre,
                        $nom,
                        $prenom,
                        $sexe,
                        $photo,
                        $naissance,
                        $nationalite,
                        $profession,
                        $adress_postale,
                        $ville,
                        $pays,
                        $tel1,
                        $conjoint,
                        $type_piece,
                        $numero_piece,
                        $lieu,
                        $type_compte,
                        $document,
                        $login,
                        md5($pass)
                  )
            );
      } else {
            $erreur = "Erreur lors de l'ajout à la base de donnée";
      }


} else {
}