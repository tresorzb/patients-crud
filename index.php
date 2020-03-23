<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="public/css/bootstrap.css" >
    <script src="public/js/bootstrap.js" ></script>
     
    <style>
        .heading{
            text-align: center;
        }
    </style>
    <link rel="stylesheet" href="public/css/animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>
        <div class="container">
        <div class="blue-divider"></div>
            <div class="heading">
                <h2>Liste des patients </h2>
                <a href="insert.php" class="btn btn-outline-success"><i class="fa fa-plus"></i> ajouter un patient </a>
            </div>
            <br>
            <div class="row" >
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr>
                      <th>patient N </th>
                      <th>Nom</th>
                      <th>prenom</th>
                      <th>sexe</th>
                      <th>n_identite</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 

                    require ("./config/config.php");
                    $db =Database::connect();
                    $i = 1 ;
                    $statement = $db->query("SELECT `id`, `nom`, `prenom`, `n_identite`, `sexe`, `date_naissance`, `poids`, `date_enregistrement` FROM `patients` ");
                    while($patient = $statement->fetch()) 
                    {
                      echo '<tr>';
                        echo '<td>'. $i . '</td>';
                        echo '<td>'. $patient['nom'] . '</td>';
                        echo '<td>'. $patient['prenom'] . '</td>';
                        echo '<td>'. $patient['sexe'] . '</td>';

                        echo '<td>'. $patient['n_identite'] . '</td>';

                        echo '<td width=350>';
                          echo '<a class="btn btn-outline-default" href="view.php?id='.$patient['id'].'"><i class="fa fa-eye"></i>Voir</a>';
                          echo ' ';
                          echo '<a class="btn btn-outline-primary" href="update.php?id='.$patient['id'].'"><i class="fa fa-edit"></i>Modifier</a>';
                          echo ' ';
                          echo '<a class="btn btn-outline-danger" href="delete.php?id='.$patient['id'].'"><i class="fa fa-remove"></i>Supprimer</a>';
                        echo '</td>';
                      echo '</tr>';

                        $i++ ;
                    }
                    Database::disconnect();

                  ?>
                    
                  </tbody>
                </table>
            </div>
        </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
</body>
</html>