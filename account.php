<?php
require_once 'menu.php';
require_once 'Controller/Load.php';
?>

<section id="register-view">
    <div class="container">
        <form action="register.php" method="post" role="form" name="register">
            <div class="form-group">
                <div class="row">
                    <div class="col-lg-6 left">
                        <label for="r1">Primeiro Nome*</label>
                        <input name="r1" type="text" class="form-control" required>
                    </div>
                    <div class="col-lg-6 right">
                        <label for="r2">Ultimo Nome*</label>
                        <input name="r2" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 left">
                        <label for="r3">Email*</label>
                        <input name="r3" type="email" class="form-control" required>
                    </div>
                    <div class="col-lg-6 right">
                        <label for="r4">Password</label>
                        <input name="r4" type="password" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 left">
                        <label for="r5">Data Nascimento*</label>
                        <input name="r5" type="date" class="form-control" required>
                    </div>
                    <div class="col-lg-6 right">
                        <label for="r6">NIF*</label>
                        <input name="r6" type="text" pattern="\d*" class="form-control" minlength="11" required maxlength="11">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 left">
                        <label for="r7">País*</label>
                        <input name="r7" type="text" class="form-control" required>
                    </div>
                    <div class="col-lg-6 right">
                        <label for="r8">Distrito*</label>
                        <input name="r8" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 left">
                        <label for="r9">Cidade*</label>
                        <input name="r9" type="text" class="form-control" required>
                    </div>
                    <div class="col-lg-6 right">
                        <label for="r10">Morada*</label>
                        <input name="r10" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 left">
                        <label for="r11">Código Postal* (ex:7600-077)</label>
                        <input name="r11" type="text" pattern="[0-9]{4}-[0-9]{3}" class="form-control" required>
                    </div>
                    <div class="col-lg-6 right">
                        <label for="r12">Telefone</label>
                        <input name="r12" type="text" pattern="\d*" class="form-control" minlength="9" maxlength="9">
                    </div>

                </div>
            </div>
            <button type="submit" class="btn btn-primary" onclick="registerClick()">Registar</button>
        </form>
    </div>
</section>

<script language="JavaScript" type="text/javascript">
    function registerClick() {
        $.ajax({
            type: "POST",
            url: "Controller/Load.php",
            data: {r1: "r1", r2: "r2", r3:"r3"
            r4:"r4", r5:"r5", r6:"r6", r7:"r7"
            r8:"r8", r9:"r9", r10:"r10", r11:"r11", r12:"r12"}
        })
    }
</script>

<?php
require_once 'footer.php';
?>
