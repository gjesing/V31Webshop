<?php
if (isset($_SESSION['loggedIn']) && $_SESSION['loggedIn']) {
    header("location: " . $_SESSION['previousPage']);
}

$title = "Log ind";
include "header.php";
?>
<h2>Log ind</h2>
<form action="assets/login.php" method="post" class="login">
    <label for="username" <?php echo (isset($_SESSION['username'])) ? 'class="wrongInput"' : ''; ?>>Brugernavn</label>
    <input type="text" name="username" <?php echo (isset($_SESSION['username'])) ? 'value="' . $_SESSION['username'] . '" class="wrongInput"' : 'autofocus'; ?> required>
    <label for="password" <?php echo (isset($_SESSION['username'])) ? 'class="wrongInput"' : ''; ?>>Adgangskode</label>
    <input type="password" name="password" <?php echo (isset($_SESSION['username'])) ? 'class="wrongInput" autofocus' : ''; ?> required>
    <?php
    if (isset($_SESSION['errorMsg'])) {
        echo '<p class="errorMsg">' . $_SESSION['errorMsg'] . '</p>';
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        unset($_SESSION['errorMsg']);
    }
    ?>
    <input type="submit" value="Log ind">
</form>
<?php include "footer.php"; ?>