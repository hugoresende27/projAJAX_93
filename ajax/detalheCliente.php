<?php

    include 'gestor.php';

    $gestor = new Gestor();
    $params = array(
        ':id_cliente' => $_POST['id_cli']
    );
    
    $detalhe_cliente = $gestor->EXE_QUERY("
        SELECT * FROM clientes WHERE id_cliente = :id_cliente 
    ",$params);
    //print_r($detalhe_cliente);
    echo json_encode($detalhe_cliente,128);