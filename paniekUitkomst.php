<!doctype HTML>
<html lang="nl">
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
            <?php print('Er heerst paniek in het koninkrijk '.$Land['value'].'. Koning '.$Spijbelen['value'].' is ten einde raad en als koning '.$Spijbelen['value'].' ten einde raad is. dan roept hij zijn ten-einde-raadsheer '.$Persoon['value'].'.
                <br><br>
                "'.$Persoon['value'].'! Het is een ramp! Het is een schande!"<br><br>
                "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"<br><br>
                "Mijn '.$Dier['value'].' is verdwenen! Zo maar zonder waarschuwing. En ik had net '.$Speelgoed['value'].' voor hem gekocht!"<br><br>
                "Majesteit, uw '.$Dier['value'].' komt vast vanzelf weer terug?"<br><br>
                "Ja, da'."'".'s leuk en aardig, maar hoe moet ik in de tussentijd '.$Bezigheid['value'].' leren?"<br><br>
                "Maar Sire, daar kunt u toch uw '.$Kopen['value'].' voor gebruiken"<br><br>
                "'.$Persoon['value'].', je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had."<br><br>
                "'.$Verveelt['value'].', Sire."');
            ?>
        </p>
        <div class="footer">
            <p class="foottext">©Deze website is gemaakt door Guylano in 2022</p>
        </div>
    </div>
</body>
</html>
