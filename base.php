<?php 
	include("conection.php");
	$usuarios = "SELECT * FROM Datos";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Página Web</title>
    <link rel="stylesheet" type="text/css" href="Css.class">
</head>
<body>

<h1>Enter you code in line 24</h1>

<form id="form" action="inserta.php" method="POST">
  <div class="field">
    <label for="emailjs_name">from name</label>
    <input type="text" name="from_name" id="emailjs_name" required>
  </div>
  
  <div class="field">
    <label for="emailjs_email">to name</label>
    <input type="text" name="to_name" id="emailjs_to_name" required>
  </div>

  <div class="field">
    <label for="emailjs_message">menasje</label>
    <input type="text" name="message" id="emailjs_message" required>
  </div>

  <div class="field">
    <label for="emailjs_email">emailjs_id</label>
    <input type="text" name="email_id" id="emailjs_email" required>
  </div>

  <div class="field">
    <label for="emailjs_email">reaply</label>
    <input type="text" name="reply_to" id="emailjs_email" required>
  </div>


  <?php $resultado = mysqli_query($conexion, $usuarios);
while($row=mysqli_fetch_assoc($resultado)) {?>
      <?php echo $row["valor"];?>
<?php }?>

  <input type="submit" id="button" value="Send Email" >
</form>
<form id="form" action="inserta.php" method="POST">
  
<div class="field">
    <label for="plc">plc</label>
    <input name = "valor23" type="text" id="envio" required>
  </div>
<input type="submit" id="button" value="Send PLC VALUE" >
</form>
<script src="javaScript.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js"></script>
<script type="text/javascript">emailjs.init('6dp-E6bB6IrRDmvJc')</script>

</body>
</html>