<?php
$pageTitle = "Create";
$headerTitle = "Insert into database";
require __DIR__ . "/view/header.php";
require "database//config.php";
require "database//functions.php";

$lastName = $_POST["LastName"] ?? null;
$firstName = $_POST["FirstName"] ?? null;
$age = $_POST["Age"] ?? null;
$add = $_POST["add"] ?? null;

if($add){
    $db = connectDatabase($dsn);
    $res = createNew($db, $lastName, $firstName, $age);
}
?>

<form method="post">
    <p>
        <label>LastName: 
            <input type="text" name="LastName" >
        </label>
    </p>
    <p>
        <label>FirstName: 
            <input type="text" name="FirstName" >
        </label>
    </p>
    <p>
        <label>Age: 
            <input type="text" name="Age" >
        </label>
    </p>

    <p>
        <input type= "submit" name="add" value="add">
</p>
    


</form>

<?php require __DIR__ . "/view/movingDuck.php"; ?>
<?php require __DIR__ . "/view/footer.php"; ?>
    