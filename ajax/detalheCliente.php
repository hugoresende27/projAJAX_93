<?php

    include 'gestor.php';

    $gestor = new Gestor();
    $params = array(
        ':id_cliente' => $_POST['id_cli']
    );
    print_r ($params);
    $detalhe_cliente = $gestor->EXE_QUERY("
        SELECT * FROM clientes WHERE id_cliente = :id_cliente 
    ",$params);
    
    echo json_encode($detalhe_cliente,128);