<?php
session_start();
$password = 'kangourou';
if(!empty($_POST)){
    if(empty($_POST['username']) || !preg_match('/^[a-zA-Z0-9_]+$/', $_POST['username'])){
        $errors['username'] = "Vous n'avez pas entrer de pseudo valide";
    }
    if(empty($_POST['password']) || $_POST['password'] != $password){
        $errors['password'] = "Vous devez rentrer le même mot de passe ";
    }
    if(empty($errors)){
        header('Location: account.php');
        exit();
    }
}

?>
<?php require '../includes/header.php'; ?>

    <h1>Se connecter</h1>

<?php if(!empty($errors)): ?>
    <div class="alert alert-danger">
        <p>Vous n'avez pas rempli le formulaire correctement</p>
        <ul>
            <?php foreach($errors as $error): ?>
                <li>
                    <?= $error ; ?>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
<?php endif; ?>

    <form action="" method="POST">
        <div class="form-group">
            <label for="">Pseudo</label>
            <input type="text" name="username" class="form-control" required/>
        </div>
        <div class="form-group">
            <label for="">Mot de passe</label>
            <input type="password" name="password" class="form-control" required/>
        </div>
        <button class="btn btn-primary">Se connecter</button>
    </form>

<?php require '../includes/footer.php'; ?>