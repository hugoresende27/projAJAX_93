<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Projeto 93</title>
    <script src="assets/jquery-3.6.0.min.js"></script>
</head>
<body>

    <p id="texto">Texto Original</p>
    <button onclick="alterar();">Alterar</button>
    
<script>
    function alterar(){
        $.ajax({
            //type: 'GET',
            type: 'POST',
            url: 'resp.php',  //poderia ser --> http://omeuservidor.com/resp.php
            //data: {parcela1: 10, parcela2: 30, operacao: "-"},
            data: {nome: 2},
            success: function(dados) {
                //var nomes = JSON.parse(dados);
                //console.log(dados);


                //document.getElementById('texto').innerHTML=dados;
                //$('#texto').text(nomes[2]);
                //$('#texto').text(nomes[0]['nome']+ ' '+ nomes[2]['apelido']);//nomes misturados
                $("#texto").text(dados);
            },
            error: function() {
                console.log("ERRO");
            }
        });
    }
</script>

</body>
</html>