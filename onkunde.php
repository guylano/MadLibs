
<!doctype HTML>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Mad Libs</title>
    <link rel="stylesheet" type="text/css" href="MadLibs.css">
</head>
<body>
  <h1>MAD LIBS</h1>
  <div class="blok">
    <div class="nav">
      <a class="clean-link" href="#">Er heerst paniek...</a>
      <a class="clean-link" href="onkunde.php">Onkunde</a>
    </div>
    <h2>Onkunde</h2>
    <form action="/madLibs/onkundeUitkomst.php" class="content">
      <div class="fields">
        <label for="Kunnen">Wat wil je kunnen?</label>
        <input type="text" id="Kunnen" name="Kunnen" class="input" required ><br>
      </div>
      <div class="fields">
        <label for="Persoon">Met welke persoon kun je goed opschieten?</label>
        <input type="text" id="Persoon" name="Persoon" class="input" required><br>
      </div>
      <div class="fields">
        <label for="favorietGetal">Wat is je favoriete getal?</label>
        <input type="text" id="favorietGetal" name="favorietGetal" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Vakantie">Wat heb je altijd bij als je op vakantie gaat?</label>
        <input type="text" id="Vakantie" name="Vakantie" class="input" required><br>
      </div>
      <div class="fields">
        <label for="BesteEigenschap">Wat is je beste persoonlijke eigenschap?</label>
        <input type="text" id="BesteEigenschap" name="BesteEigenschap" class="input" required><br>
      </div>
      <div class="fields">
        <label for="SlechtsteEigenschap">Wat is je slechtste persoonlijke eigenschap?</label>
        <input type="text" id="SlechtsteEigenschap" name="SlechtsteEigenschap" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Overkomen">Wat is je slechtste wat je kan overkomen?</label>
        <input type="text" id="Overkomen" name="Overkomen" class="input" required><br>
      </div>
      <input type="submit" class="submit" value="Versturen">
  </form>
  </div>
</body>
</html>
