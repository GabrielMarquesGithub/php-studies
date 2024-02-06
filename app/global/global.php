<?php

$name = $_GET['name'] ?? 'Name not informed';
$email = $_GET['email'] ?? 'Email not informed';

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Variables</title>
</head>

<body>
    <h1>Global Variables</h1>
    <p>
        Name: <?php echo $name; ?>
    </p>
    <p>
        Email: <?php echo $email; ?>
    </p>
    <a href="/global">Back</a>
</body>

</html>