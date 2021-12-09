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
            type: 'GET',
            url: 'resp.php',
            success: function(dados) {
                document.getElementById('texto').innerHTML=dados;
            },
            error: function() {
                console.log("ERRO");
            }
        });
    }
</script>

</body>
</html>