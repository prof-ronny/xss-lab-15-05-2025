<?php
if (isset($_POST['comentario'])) {
    file_put_contents("comentarios.txt", $_POST['comentario'] . PHP_EOL, FILE_APPEND);
}
$comentarios = file("comentarios.txt");
?>
<form method="POST">
  Comentário: <input name="comentario">
  <button>Enviar</button>
</form>
<div>
<?php
foreach ($comentarios as $c) {
    echo "<p>$c</p>"; // Vulnerável
}
?>
</div>
