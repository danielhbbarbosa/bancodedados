<h1>Categorias</h1>
<form action="get">
    <input type="text" name="nome_categoria" placeholder="Nome da categoria">
    <button>Enviar</button>
</form> 

<?php
    //echo $_GET['nome_categoria'];

    if(isset($_GET['nome_categoria'])){
        echo "Categoria: ".$_GET['nome_categoria'];
    } 
    else {
        echo "Categoria não encontrada";
    }
?>