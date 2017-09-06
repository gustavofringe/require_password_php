<?php
require '../includes/header.php';
?>

    <h1>Vous êtes connecté</h1>
<p>Bonjour <?= $_SESSION['auth']; ?></p>
<?php require '../includes/footer.php'; ?>