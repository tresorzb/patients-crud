<?php
    require ("./config/config.php");
    require ("./public/function.php");

    if(!empty($_GET['id'])) 
    {
        $id = test_input($_GET['id']);
    }

    if(!empty($_POST)) 
    {
        $id = test_input($_POST['id']);
        $db = Database::connect();
        $statement = $db->prepare("DELETE FROM patients WHERE id = ?");
        $statement->execute(array($id));
        Database::disconnect();
        header("Location: index.php"); 
    }

   
?>
    
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
    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="blue-divider"></div>
            <div class="heading" style="text-align: center;">
                <h2>supprimer le patient <?php echo $id; ?> de la liste !?</h2>
            </div>
        <div class="row">
        

                <form class="form" action="delete.php" role="form" method="post">
                    <input type="hidden" name="id" value="<?php echo $id;?>"/>
                    <p class="alert alert-warning">Etes vous sur de vouloir supprimer ?</p>
                    <div class="form-actions">
                      <button type="submit" class="btn btn-warning">Oui</button>
                      <a class="btn btn-default" href="index.php">Non</a>
                    </div>
                </form>
        </div>
    </div>
</body>
</html>