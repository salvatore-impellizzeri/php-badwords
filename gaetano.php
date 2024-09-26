<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Second</title>
</head>
<body>

    <a href="./index.php">
        First
    </a>

    <div>
        <p>
            Testo: <?php echo $_GET["texted"] ?>
        </p>
        <p>
            La lunghezza del testo è di <?php echo strlen($_GET["texted"]); ?> caratteri
        </p>
    </div>

    <div>
        <p>
            Parola censurata: <?php echo $_GET["badword"] ?>
        </p>
    </div>

    <div>
        Il testo censurato è: <?php echo str_replace( $_GET["badword"] , "***", $_GET["texted"]); ?> .
        La lunghezza del testo è di <?php echo strlen(str_replace($_GET["badword"], "***", $_GET["texted"])); ?> caratteri
    </div>

</body>
</html>