<!doctype HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mad Libs</title>
    <link rel="stylesheet" type="text/css" href="/MadLibs.css">
</head>

  
<?php
    function redirect($url, $statusCode = 303){
       header('Location: ' . $url, true, $statusCode);
       die();
    }

    $errors=array();
    $Kunnen['value'] = $_REQUEST['Kunnen'];
    $Persoon['value'] = $_REQUEST['Persoon'];
    $favorietGetal['value'] = $_REQUEST['favorietGetal'];
    $Vakantie['value'] = $_REQUEST['Vakantie'];
    $BesteEigenschap['value'] = $_REQUEST['BesteEigenschap'];
    $SlechtsteEigenschap['value'] = $_REQUEST['SlechtsteEigenschap'];
    $Overkomen['value'] = $_REQUEST['Overkomen'];

    $Kunnen['name'] = 'Kunnen:>';
    $Persoon['name'] = 'Persoon';
    $favorietGetal['name'] = 'favorietGetal';
    $Vakantie['name'] = 'Vakantie';
    $BesteEigenschap['name'] = 'BesteEigenschap';
    $SlechtsteEigenschap['name'] = 'SlechtsteEigenschap';
    $Overkomen['name'] = 'Overkomen';

$fields=[$Kunnen, $Persoon, $favorietGetal, $Vakantie, $BesteEigenschap, $SlechtsteEigenschap, $Overkomen];



foreach ($fields as $Field) {
    if(empty($Field['value'])){
        $errors[]=$Field['name'];
    }
}




    if(count($errors)!=null){
        ?>
        <body onload="document.getElementById('myForm').submit.call(document.getElementById('myForm'))">
        <form id="myForm" action="/madLibs/index.php" method="post">
            <?php
              foreach ($errors as $e) {
                echo '<input type="hidden" name="'.$e.'" value="'.$e.'">';

                }
            ?>
        </form>
        <?php
    }
    ?>
<body>
<p> holla <?php print $Kunnen['value']; ?> jo </p>
</body>
</html>
