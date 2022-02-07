<!doctype HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mad Libs</title>
    <link rel="stylesheet" type="text/css" href="/MadLibs.css">
</head>
<body>
  <form action="/madLibs/uitkomst.php">
    <label for="Kunnen">Wat wil je kunnen?</label>
    <input type="text" id="Kunnen" name="Kunnen"  ><br>

    <label for="Persoon">Met welke persoon kun je goed opschieten?</label>
    <input type="text" id="Persoon" name="Persoon" ><br>

    <label for="favorietGetal">Wat is je favoriete getal?</label>
    <input type="text" id="favorietGetal" name="favorietGetal" ><br>

    <label for="Vakantie">Wat heb je altijd bij als je op vakantie gaat?</label>
    <input type="text" id="Vakantie" name="Vakantie" ><br>

    <label for="BesteEigenschap">Wat is je beste persoonlijke eigenschap?</label>
    <input type="text" id="BesteEigenschap" name="BesteEigenschap" ><br>

    <label for="SlechtsteEigenschap">Wat is je slechtste persoonlijke eigenschap?</label>
    <input type="text" id="SlechtsteEigenschap" name="SlechtsteEigenschap" ><br>

    <label for="Overkomen">Wat is je slechtste wat je kan overkomen?</label>
    <input type="text" id="Overkomen" name="Overkomen" ><br>
    
    <input type="submit" value="Versturen">
  </form>
  <?php $Overkomen=null; $Overkomen= $_REQUEST['Overkomen'];
  if($Overkomen!=null)
  echo($Overkomen); ?>
</body>
</html>
