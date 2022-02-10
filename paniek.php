
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
      <a class="clean-link" href="paniek.php">Er heerst paniek...</a>
      <a class="clean-link" href="onkunde.php">Onkunde</a>
    </div>
    <h2>Er heerst paniek...</h2>
    <form action="/madLibs/paniekUitkomst.php" class="content">
      <div class="fields">
        <label for="Dier">Welk dier zou je nooit als huisdier willen hebben?</label>
        <input type="text" id="Dier" name="Dier" class="input" required ><br>
      </div>
      <div class="fields">
        <label for="Persoon">Wie is het belangrijkste persoon in je leven?</label>
        <input type="text" id="Persoon" name="Persoon" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Land">In welk land zou je willen wonen?</label>
        <input type="text" id="Land" name="Land" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Verveelt">Wat doe je als je je verveelt?</label>
        <input type="text" id="Verveelt" name="Verveelt" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Speelgoed">Met welk speelgoed speelde je het meest als kind?</label>
        <input type="text" id="Speelgoed" name="Speelgoed" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Spijbelen">Bij welke docent spijbel je het liefst?</label>
        <input type="text" id="Spijbelen" name="Spijbelen" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Kopen">Als je $100.000,- had wat zou je dan kopen?</label>
        <input type="text" id="Kopen" name="Kopen" class="input" required><br>
      </div>
      <div class="fields">
        <label for="Bezigheid">Wat is je favoriete bezigheid?</label>
        <input type="text" id="Bezigheid" name="Bezigheid" class="input" required><br>
      </div>
      <input type="submit" class="submit" value="Versturen">
  </form>

  <div class="footer">
    <p class="foottext">©Deze website is gemaakt door Guylano in 2022</p>
  </div>
  </div>
</body>
</html>
