<?php
    require_once("../modelo/modelo.php");
    $menu = new Platillo();
    $pd = $menu->lista_platillos();
    require_once("../vista/vista.php");
?>

