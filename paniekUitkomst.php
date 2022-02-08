<!doctype HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mad Libs</title>
    <link rel="stylesheet" type="text/css" href="MadLibs.css">
    
</head>

  
<?php
    
    $Dier['value'] = $_REQUEST['Dier'];
    $Persoon['value'] = $_REQUEST['Persoon'];
    $Land['value'] = $_REQUEST['Land'];
    $Verveelt['value'] = $_REQUEST['Verveelt'];
    $Speelgoed['value'] = $_REQUEST['Speelgoed'];
    $Spijbelen['value'] = $_REQUEST['Spijbelen'];
    $Kopen['value'] = $_REQUEST['Kopen'];
    $Bezigheid['value'] = $_REQUEST['Bezigheid'];
    


?>
<body>
    <h1>MAD LIBS</h1>
    <div class="blok">
        <div class="nav">
            <a class="clean-link" href="paniek.php">Er heerst paniek...</a>
            <a class="clean-link" href="onkunde.php">Onkunde</a>
        </div>
        <h2>Er heerst paniek...</h2>
        <p class='content'>
            <?php print('text');
            ?>
            
        </p>
        <div class="footer">
            <p class="foottext">Deze website is gemaakt door Guylano</p>
        </div>
    </div>
</body>
</html>
