<?php 
session_start(); 

function getSession($key) {
    $message = $_SESSION[$key];
    unset($_SESSION[$key]);
    return $message;
}

function hasSession($key) {
    return isset($_SESSION[$key]); // true or false
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

<?php if(hasSession('message')):?>
    <div class="alert alert-success">
        <?php echo getSession('message'); ?>
    </div>
<?php endif; ?>
</body>
</html>