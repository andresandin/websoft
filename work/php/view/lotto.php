<!doctype html>
<meta charset="utf-8">
<title>Lotto page</title>
<link rel="stylesheet" href="../php/css/style.css">
<link rel="icon" href="../php/favicon.ico">

<h2>Lotto </h2>

<p>Lets check out the lotto row of today.</p>

<ul>
    <?php foreach ($lotto as $number) : ?>
    <li><?= $number ?></li>
    <?php endforeach; ?>
</ul>

<p>The user row is:</p>

<pre><?= print_r($userRow) ?>

<?= "1: " . $userRow ?>
<?= var_dump($userRow) ?>
<pre><?= implode(" : ", $userRowArray) ?>