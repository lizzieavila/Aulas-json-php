<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        
        <link href="_css/estilo.css" rel="stylesheet">

        <script type="text/javascript">
            function retornarProdutos(data){
               // todos console.log(data);

                //um elemento console.log(data[1]);
                
                //so um item de um produto 
                console.log(data[1].nomeproduto);
            }
            
        </script>
        <script src="http://localhost/aulas/php_jquery_ajax/php_ajax/unidade_06/gerar_json02.php?callback=retornarProdutos">
            
        </script>
    </head>

    <body>
       
    </body>
</html>