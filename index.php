<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First</title>

    <a href="./gaetano.php">
        Second
    </a>

    <form action="./gaetano.php" method="GET">
    <div>
        <div>
            Bad word
        </div>
        <input type="text" name="badword" value="<?php echo $badWord ?>">
    </div>

    <div>
        <div>
            Inserisci testo
        </div>
        <textarea name="texted" id="" value="<?php echo $text ?>">
        </textarea>
    </div>
           
    <button type="submit">
        Invia
    </button>

    </form>
</head>
<body>
    
</body>
</html>