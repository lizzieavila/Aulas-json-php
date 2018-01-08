<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <button id="botao">Carregar JSON</button>
        <div id="listagem"></div>
        <script src="jquery.js"></script>
        <script>
            $('#botao').click(function() {
                $('#listagem').css('display','block');
                carregarDados();
            }); 
            
            function carregarDados() {
                $.getJSON('gerar_json02.php', function(data) {
                    var elemento;

                    elemento = "<ul>";
                    $.each(data, function(i, valor) {
                        elemento += "<li class='nome'>" + valor.nomeproduto + "</li>"; 
                        elemento += "<li class='preco'>" + valor.precounitario + "</li>";
                        elemento += "<li class='imagem'><img src=" + valor.imagempequena + "></li>";  
                    });
                    elemento += "</ul>";

                    $('#listagem').html(elemento);
                });
            }
        </script>
    </body>
</html>