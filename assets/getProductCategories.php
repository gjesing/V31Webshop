<?php
require "connect.php";

$statement = $dbh->prepare("SELECT categoryId, name FROM ProductCategories");
$statement->execute();

while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
    ?>
    <option value="<?php echo $row['categoryId']; ?>"><?php echo $row['name']; ?></option>
<?php
}

$dbh = null;
?>