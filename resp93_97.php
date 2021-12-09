<?php

    #echo "Ola AJAX ";
    /*
    $names = array(
        'Hugo',
        'Emanuel',
        'Teixeira',
        'Resende'
    );
    
    $namesB = array ( 
        array(
            'nome'=>'Hugo',
            'apelido'=>'Resende'
        ),
        array(
            'nome'=>'Celia',
            'apelido'=>'Teixeira'
        ),
        array(
            'nome'=>'Sara',
            'apelido'=>'Daniela'
        ),
    );

    echo json_encode($namesB);
    */
        //var_dump($_POST);
    /*
        $p1 =  $_POST['parcela1'];
        $p2 =  $_POST['parcela2'];
        $op = $_POST['operacao'];

        switch ($op){
            case '+':
                echo $p1." + ".$p2 ." = ". ($p1 + $p2);
                break;
            case '-':
                echo $p1." - ".$p2 ." = ". ($p1 - $p2);
                break;
            case '/':
                echo $p1." / ".$p2 ." = ". ($p1 / $p2);
                break;
            case '*':
                echo $p1." X ".$p2 ." = ". ($p1 * $p2);
                break;
            default:
                echo "OPERAÇÃO INVÁLIDA";
                break;
        }
    */
    $names = array('Hugo','Emanuel','Teixeira','Resende');

    echo ($names[$_POST['nome']])." = ".($names[2]);
    
        