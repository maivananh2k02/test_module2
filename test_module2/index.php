<?php
require 'app/Model/DBConnect.php';
require 'app/Model/ProductModel.php';
require 'app/Model/Product.php';
require 'app/Controller/ProductControl.php';

use Controller\ProductControl;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test module 2</title>
</head>
<body>
<div class="container">
    <?php
    $controller = new ProductControl();
    $page = $_REQUEST['page'] ?? null;

    switch ($page) {
        case 'add':
            $controller->add();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'update':
            $controller->update();
            break;
        case 'search':
            $controller->search();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>
</body>
</html>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"
        integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js"
        integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG"
        crossorigin="anonymous">
</script>