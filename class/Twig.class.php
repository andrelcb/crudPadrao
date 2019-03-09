<?php 

class Twig
{
    public function __construct()
    {

    }

    public static  function obterTwig()
    {
      $loader = new Twig_Loader_FileSystem('views/');

      $twig = new Twig_Environment($loader, [
        "cache" => "view/cache",
        "cache" => false  
      ]);

      return $twig;
    }
}

?>