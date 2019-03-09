<?php 
require_once $_SERVER["DOCUMENT_ROOT"]."/crudPadrao/class/DAO/FilmesDAO.php";
require_once $_SERVER["DOCUMENT_ROOT"]."/crudPadrao/class/DAO/CategoriaDAO.php";


//instancias de classes DAO
$filmesDAO    = new Filmes();
$categoriaDAO = new Categoria();

if($_POST['acao'] == "cadastrar")
{
    $query = "INSERT ";
}



// $buscaFilme = $filmesDAO->buscaFilme();

// while($objetoFilme = mysql_fetch_object($buscaFilme, "Filme"))
// {
//     $nomefILME = $objetofilme->getNomeFilme();
// };

//busca categoria
$buscaCategoria = $categoriaDAO->buscaCategoria($conectaBanco);

while($objetoCategoria = mysqli_fetch_object($buscaCategoria, "Categoria"))
{
    $arrayCategoria[] =[
        "value" => $objetoCategoria->getIdCategoria(),
        "text"  => $objetoCategoria->getNome(),
    ];
}

$dadosTemplate['mensagem']       = "Bem vindo, faça o seu cadastro.";
$dadosTemplate["arrayCategoria"] = $arrayCategoria;

