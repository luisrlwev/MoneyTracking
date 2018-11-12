<!DOCTYPE html>
<html lang="mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Framework Básico: <?php if(isset($this->titulo)) { echo $this->titulo; } ?></title>
    <link rel="stylesheet" type="text/css" href="<?php echo $_layoutParams["ruta_css"]; ?>bootstrap.min.css">
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>jquery-3.3.1.min.js"></script>
    <script src="<?php echo $_layoutParams["ruta_js"]; ?>bootstrap.min.js"></script>
</head>
<body>
    <div class="container">
<?php

if ($this->_msg->hasMessages()){
    echo $this->_msg->display();
}

?>
