<?php
require 'menu.php';

require_once '../Controllers/loadControl.php';

$cont = new \mineiro\loadControl();

?>

<meta http-equiv="Refresh" content="5; url=index.php">

<section id="success-view">
    <div class="container">
        <div class="alert">
            <h1>Registo efetuado com sucesso</h1>
            <p>Irá ser redireciondo dentro de 5 seg para a página principal, caso não acontece carregue no seguinte link, <a href="index.php">click aqui.</a> </p>
        </div>
    </div>
</section>

<?php
require 'footer.php';
?>
