<?php
$pageTitle = "Create";
$headerTitle = "Insert into database";
require __DIR__ . "/view/header.php";
require "database//config.php";
require "database//functions.php";

$item  = $_GET["item"] ?? null;
$id = $_POST["Personid"] ?? null;
$lastName = $_POST["LastName"] ?? null;
$firstName = $_POST["FirstName"] ?? null;
$age = $_POST["Age"] ?? null;
$update = $_POST["update"] ?? null;

$db = connectDatabase($dsn);

$sql = "SELECT * FROM persons";
$stmt = $db->prepare($sql);
$stmt->execute();
$res1 = $stmt->fetchAll();

if ($item) {
    $sql = "SELECT * FROM persons WHERE Personid = ?";
    $stmt = $db->prepare($sql);
    $stmt->execute([$item]);
    $res2 = $stmt->fetch();
}

if($update){
    
    updateTable($db, $id, $lastName, $firstName, $age);
}
?>

<form>
    <select name="item" onchange="this.form.submit()">
        <option value="-1">Select item</option>

        <?php foreach ($res1 as $row) : ?>
            <option value="<?= $row["Personid"] ?>"><?= "(" . $row["Personid"]. ") " . $row["LastName"] ?></option>
        <?php endforeach; ?>

    </select>
</form>

<?php if ($res2 ?? null) : ?>
<form method="post">
    <fieldset>
        <legend>Update</legend>
<p>
        <label>Personid: 
            <input type="text" readonly="readonly" name="Personid" value="<?= $res2["Personid"] ?>">
        </label>
    </p>    
    <p>
        <label>LastName: 
            <input type="text" name="LastName" value="<?= $res2["LastName"] ?>" >
        </label>
    </p>
    <p>
        <label>FirstName: 
            <input type="text" name="FirstName" value="<?= $res2["FirstName"] ?>" >
        </label>
    </p>
    <p>
        <label>Age: 
            <input type="text" name="Age" value="<?= $res2["Age"] ?>" >
        </label>
    </p>

    <p>
        <input type= "submit" name="update" value="update">
</p>
</fieldset>
</form>
<?php endif; ?>

<?php if ($res1 ?? null) : ?>
    <table>
        <tr>
            <th>ID </th>
            <th>Lastname </th>
            <th>Firstname </th>
            <th>Age</th>
        </tr>

    <?php 
    //if(is_array($res1) || is_object($res1)) :
    foreach ($res1 as $row) : ?>
        <tr>
            <td><?= $row["Personid"] ?></td>
            <td><?= $row["LastName"] ?></td>
            <td><?= $row["FirstName"] ?></td>
            <td><?= $row["Age"] ?></td>
        </tr>
    <?php endforeach; 
    //endif; 
    ?>

    </table>
<?php endif; ?>


<?php require __DIR__ . "/view/movingDuck.php"; ?>
<?php require __DIR__ . "/view/footer.php"; ?>
    