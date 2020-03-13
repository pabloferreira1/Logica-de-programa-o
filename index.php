
<form action="script.php" method="post">
Nome: <input type="text" name=campo1><br>
Datadenascimento: <input type="date" name=Datadenascimento><br> 
Escolhadocurso: <input type="select" name=Escoladocurso>
<option value="Eletrica">Eletrica</option>
<option value="Informatica">Informatica</option>
<option value="Manicure">Manicure</option>
<input type=submit value="OK">
</form>

<?php
echo "campo 1 é: " . $_POST["campo1"];
echo "O valor de CAMPO 2 é " . $_POST["campo2"];
?>
