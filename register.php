<?php
$title = "Opret bruger";
include "header.php";
?>
<h2>Opret bruger</h2>
<form action="assets/register.php" method="post" class="register">
    <label for="firstName">Fornavn</label>
    <input type="text" name="firstName" <?php echo (isset($_SESSION['firstName'])) ? 'value="' . $_SESSION['firstName'] . '"' : 'autofocus'; ?> required>
    <label for="lastName">Efternavn</label>
    <input type="text" name="lastName" <?php echo (isset($_SESSION['lastName'])) ? 'value="' . $_SESSION['lastName'] . '"' : ''; ?> required>
    <label for="username" <?php echo (isset($_SESSION['username'])) ? 'class="wrongInput"' : ''; ?>>Brugernavn</label>
    <input type="text" name="username" <?php echo (isset($_SESSION['username'])) ? 'value="' . $_SESSION['username'] . '" class="wrongInput"' : ''; ?> required>
    <?php
    if (isset($_SESSION['errorMsg'])) {
        echo '<p class="errorMsg">' . $_SESSION['errorMsg'] . '</p>';
    }
    ?>
    <label for="password">Adgangskode</label>
    <input type="password" name="password" <?php echo (isset($_SESSION['password'])) ? 'value="' . $_SESSION['password'] . '"' : ''; ?> required>
    <?php
    if (isset($_SESSION['errorMsg'])) {
        unset($_SESSION['firstName']);
        unset($_SESSION['lastName']);
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['errorMsg']);
    }
    ?>
    <input type="submit" value="Opret bruger">
</form>
<?php include "footer.php"; ?>