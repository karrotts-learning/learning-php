<?php
    namespace todo;
    include 'todomanager.php';
    session_start();
    Todos::Init();
    $_SESSION["manager"] = serialize(Todos::$Manager);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quick TODO App</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    TODO: <input type="text" name="message">
    <input type="submit">
</form>

<?php
$manager = unserialize($_SESSION["manager"]);
$manager->RenderItems();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $message = $_POST['message'];
  if (empty($message)) {
    echo "Message is empty";
  } else {
    $manager->AddItem($message);
    $manager->RenderItems();
  }
}

$_SESSION["manager"] = serialize($manager);
?>
</body>
</html>