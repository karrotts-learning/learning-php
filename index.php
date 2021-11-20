<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>PHP Playground</title>
</head>
<body>
    <div style="text-align: center;">
    <h2>PHP Playground</h2>
    <p>Files on Site: </p>
    <ul class="list-group">
  <!--<li class="list-group-item active" aria-current="true">An active item</li>-->
        <?php
            $files = scandir("C:\Users\Wes\Learning-PHP");
            for ($i = 2; $i < count($files); $i++) {
                echo "<li class=\"list-group-item\"><a href=". $files[$i] . ">" . ucfirst(substr($files[$i], 0, -4)) . "</a></li>";
            }
        ?>
    </ul>
    <?php
        include 'navigation.php';
        \navigation\RenderNavigation();
         
    ?>
    </div>
</body>
</html>
