<?php
$pageTitle = "Search";
$headerTitle = "Search the database";
require __DIR__ . "/view/header.php";
require "database//config.php";
require "database//functions.php";

$search = $_GET["search"] ?? null;

if($search){
    $db = connectDatabase($dsn);
    $res = wildCardSearch($db, $search);
}
?>

<form>
    <p>
        <label>Search: 
            <input type="text" name="search" value="<?= $search ?>">
        </label>
    </p>
</form>

<?php if ($search) : ?>
    <table id ="myTable">
        <tr>
            <th>ID </th>
            <th>Lastname </th>
            <th>Firstname </th>
            <th>Age</th>
        </tr>

    <?php 
    if(is_array($res) || is_object($res)) :
    foreach ($res as $row) : ?>
        <tr>
            <td><?= $row["Personid"] ?></td>
            <td><?= $row["LastName"] ?></td>
            <td><?= $row["FirstName"] ?></td>
            <td><?= $row["Age"] ?></td>
        </tr>
    <?php endforeach; 
endif; ?>
    </table>
<?php endif; ?>

<?php require __DIR__ . "/view/movingDuck.php"; ?>
<?php require __DIR__ . "/view/footer.php"; ?>
    