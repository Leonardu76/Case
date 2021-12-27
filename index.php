
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="index.js">
  <title>Case sensitive</title>
</head>

<body>
    <form   action= "index.php"  id="cont" method="POST" >
    <select  class="col-sm-5" id="select"  name="choose">
      <option value="1">Letra maiúscula</option>
      <option value="2">Letra minúscula</option>
      <option value="3">Primeira letra maiúscula</option>
      <option value="4">Quantidade de caracteres</option>
    </select>
    <div > 
      <textarea name="select" class="col-sm-5 " id="text" placeholder="Escreva aqui"></textarea>
      <br>
      <button   class=" col-sm-5 " id="submit" type="submit">Alterar</button>
    </div>
  </form>
  <?php
$texto;
$texto = $_POST['select'];
$choose = $_POST['choose'];
switch ($choose){
case 1:
$texto = strtoupper($texto);
break;

case 2:
$texto = strtolower($texto);
break;

case 3:
$texto = ucfirst($texto);
break;

case 4:
$texto = strlen($texto);
break;
}

?>
  <br>
  <div id="cont2" >
    <textarea class="col-sm-5" id="text2"><?=$texto?></textarea>
    <br>
  <button class="col-sm-5" id="botao">Copiar</button>
</div>

  <script type="text/javascript">
    document.getElementById("botao").addEventListener('click', execCopy);
    function execCopy() {
      document.querySelector("#text2").select();
      document.execCommand("copy");
    }
  </script>
  
</body>

</html>