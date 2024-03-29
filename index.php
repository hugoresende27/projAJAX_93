<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AJAX Projeto 93-B</title>
    <script src="assets/jquery-3.6.0.min.js"></script>
</head>
<body>

<h3>Clientes</h3>
<hr>
    <div id="detailsCliente">
        <small>Não existe cliente seleccionado</small>
    </div>

<hr>
    <div id="listaClientes">
        
        <!-- <ul>
            <li></li>
        </ul> -->
    </div>
<!-- <button onclick="listaCli()">Atualizar</button> -->

<script>
//-------------------------------------------------------------------------------
$(document).ready(function(){

    // construção da lista de clientes
    listaCli();
});

//-------------------------------------------------------------------------------
    function listaCli(){
        $.ajax({
            type: "GET",
            url:"ajax/todosClientes.php",
            success: function(dados){
                //console.log("OK")
                var clientes = JSON.parse(dados);//coleção de dados
                /*
                clientes.forEach(ele => {
                    console.log(ele['nome'])
                    $('#listaClientes').text(ele['nome']);
                })
                */
                
                //$('#listaClientes').text(clientes[0]['nome']);

                //IMPRIMIR LISTA COMPLETA DOS CLIENTES
                
                var html = "<ul>";
                clientes.forEach ( c => {
                    html += "<li onclick=\"detalheCli(" + c['id_cliente'] + ")\">" + c['nome'] + "</li>";
                    
                });
                html += "</ul>";

                $('#listaClientes').html(html);
                
                
            },
            error: function(){
                console.log("ERRO!");
            }
        });
    }

//-------------------------------------------------------------------------------
    function detalheCli(id_cliente){
        //console.log(id_cliente);
        $.ajax({
            type: "POST", //porque vou enviar info por este scrip
            url:"ajax/detalheCliente.php",
            data: {id_cli: id_cliente},
            success: function(dados){
                console.clear();
                var cliente = JSON.parse(dados)[0];
                console.log(cliente);

                
                var html = "<p>Nome: " + cliente.nome + "</p>";
                    html += "<p>Email: " + cliente.email + "</p>";
                    html += "<p>Telemóvel: " + cliente.telemovel + "</p>";
                
                // colocar dentro do div o detalhe do cliente
                $('#detailsCliente').html(html);

                // atualiza a lista de cliente
                listaCli();
        
                
            },
            error: function(){
                console.log("ERRO!");
            }
        });
    }
</script>
    <!--  -->
</body>
</html>