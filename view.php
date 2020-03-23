
<?php
    require ("./config/config.php");
    require ("./public/function.php");

    if(!empty($_GET['id'])) {
        $id = test_input($_GET['id']);
    }
     
    $db = Database::connect();
    $statement = $db->prepare("SELECT * FROM patients WHERE id = ?");
    $statement->execute(array($id));
    $patient = $statement->fetch();
    Database::disconnect();

    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.css" >
    <script src="public/js/bootstrap.js" ></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
    <style>
        .heading{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="public/css/animate.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
        <div class="blue-divider"></div>
            <div class="heading">
                <h2>details sur le patient <?php echo $patient['nom']; ?></h2>
            </div>
            
            <div class="row">
            <div class="col-md-6">
                    
                    <form>
                      <div class="form-group">
                        <label>Nom: </label><?php   echo "    ". $patient['nom'];  ?>
                      </div>
                      <div class="form-group">
                        <label>Prenom: </label><?php   echo "    ".$patient['prenom'];  ?>
                      </div>
                      <div class="form-group">
                        <label>Sexe: </label><?php   echo "   ".$patient['sexe'];  ?>
                      </div>
                      <div class="form-group">
                        <label>numero piece d'identité: </label><?php   echo "   ".$patient['n_identite'];  ?>
                      </div>
                      <div class="form-group">
                        <label>date_naissance: </label><?php   echo "   ".$patient['date_naissance'];  ?>
                      </div>
                      <div class="form-group">
                        <label>lieu de naissance: </label><?php   echo "   ".$patient['lieu_naissance'];  ?>
                      </div>
                      <div class="form-group">
                        <label>nationalité: </label><?php   echo "   ".$patient['nationalite'];  ?>
                      </div>
                      <div class="form-group">
                        <label>taille: </label><?php   echo "   ".$patient['taille'];  ?>
                      </div>
                      <div class="form-group">
                        <label>poids: </label><?php   echo "   ".$patient['poids'];  ?>
                      </div>
                      <div class="form-group">
                        <label>adresse: </label><?php   echo "   ".$patient['adresse'];  ?>
                      </div>
                      <div class="form-group">
                        <label>telephone: </label><?php   echo "   ".$patient['telephone'];  ?>
                      </div>
                      <div class="form-group">
                        <label>date d'enregistrement: </label><?php   echo "   ".$patient['date_enregistrement'];  ?>
                      </div>
                      
                    </form>
                    <br>
                    <div class="form-actions">
                      <a class="btn btn-outline-primary" href="index.php"><i class="fa fa-arrow-left"></i> Retour</a>
                    </div>
                </div> 
            </div>
        </div>
</body>
</html>