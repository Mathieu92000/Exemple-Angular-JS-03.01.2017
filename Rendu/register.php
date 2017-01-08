<?php
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Exercice 3 Blog Dynamique Angular JS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <ul class="nav navbar-nav">
            <li class="active"><a href="#">Home</a></li>
            <li><a href="#">Page 1</a></li>
            <li><a href="#">Page 2</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
            <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Senregistrer</a></li>
            <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>
    </div>
</nav>


    <html>

    <head>

    <?php
    if(!empty($_POST)){

    $errors= array();
    
    require_once 'db.php';

    if(empty($_POST['username'])){

    $errors['username']="Veuillez rentrer un Pseudo";
    
    }else{
    

    
        $errors['username'] = 'Ce Pseudo est déja utilisé';
    
    }
    

    }

    if(empty($_POST['email'])){

    $errors['email'] = "Veuillez renseigner une adresse email valide";

   }else{
    

    
        $errors['email'] = 'Cet email est déja utilisé';
    
    }
    

    }

   if(empty($_POST['password'])){

    $errors['password'] ="Vous devez rentrer un mot de passe valide";

   }

    if(empty($errors)){
    



    }
   ?>


<center><h1>S'inscrire</h1></center>

<?php if (!empty($errors));?>
<div class="alert alert-danger">
    <p>Vous n'avez pas rempli correctement le formulaire</p>
    <ul>
    <?php foreach($errors as $error): ?>
        <li><?=$error; ?></li>
    <?php endforeach; ?>
    </ul>

</div>
<?php endif; ?>

<form action="" method="POST">

    <div class="form-group">

    <label for="">Pseudo</label>
    <input type="text" name="Username" class="form-control" required/>

</div>

<div class="form-group">

    <label for="">Email</label>
    <input type="email" name="email" class="form-control" required/>

</div>

    <div class="form-group">

    <label for="">Mot de passe </label>
    <input type="password" name="password" class="form-control" required/>

</div>

<button type="submit" class="btn btn-primary">M'inscrire</button>

    </form>

</body>
</html>
