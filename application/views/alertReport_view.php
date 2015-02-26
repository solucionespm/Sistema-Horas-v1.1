<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <!-- Versión compilada y comprimida del CSS de Bootstrap -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
        <!-- Tema opcional -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap-theme.min.css">
        <!-- Versión compilada y comprimida del JavaScript de Bootstrap -->
        <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    </head>
    <body> 
        <div class="container-fluid"><br>
            <img src="<?= base_url('assets/images/logospm.jpg'); ?>" /><br>
            <?php if($send == 0){ ?>
                <div class="alert alert-danger"><h4>Advertencia:</h4>
                    El cliente <?= $cliente;?> no posee registros para la fecha seleccionada.<br>
                </div>
            <?php
            }else{ ?>
            <div class="alert alert-success">Email enviado satisfactoriamente a <?= $cliente;?></div>
            <?php
            }
            ?>
        </div>
    </body>
</html>