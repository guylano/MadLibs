<!doctype HTML>
<html lang="nl">
<head>
    <meta charset="utf-8"/>
    <title>Mad Libs</title>
    <link rel="stylesheet" type="text/css" href="MadLibs.css">
</head>
<?php  
    $Kunnen['value'] = $_REQUEST['Kunnen'];
    $Persoon['value'] = $_REQUEST['Persoon'];
    $favorietGetal['value'] = $_REQUEST['favorietGetal'];
    $Vakantie['value'] = $_REQUEST['Vakantie'];
    $BesteEigenschap['value'] = $_REQUEST['BesteEigenschap'];
    $SlechtsteEigenschap['value'] = $_REQUEST['SlechtsteEigenschap'];
    $Overkomen['value'] = $_REQUEST['Overkomen'];
?>
<body>
    <h1>MAD LIBS</h1>
    <div class="blok">
        <div class="nav">
            <a class="clean-link" href="paniek.php">Er heerst paniek...</a>
            <a class="clean-link" href="onkunde.php">Onkunde</a>
        </div>
        <h2>Onkunde</h2>
        <p class='content'>
            <?php print('Er zijn veel mensen die niet kunnen '.$Kunnen['value'].'. Neem nou '.$Persoon['value'].'. Zelfs met de hulp van een '.$Vakantie['value'].' of zelfs '.$favorietGetal['value'].' kan '.$Persoon['value'].' niet '.$Kunnen['value'].'. Dat heeft niet te maken met een gebrek aan '.$SlechtsteEigenschap['value'].', maar met een te veel aan '.$BesteEigenschap['value'].'. Te veel '.$BesteEigenschap['value'].' leidt tot '.$Overkomen['value'].' en dat is niet goed als je wilt '.$Kunnen['value'].'., Helaas voor '.$Persoon['value']);
            ?>     
        </p>
        <div class="footer">
            <p class="foottext">©Deze website is gemaakt door Guylano in 2022</p>
        </div>
    </div>
</body>
</html>