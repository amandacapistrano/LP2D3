<?php 
    class Curso{
        private $nome;
        private $link;
    

        function __construct($nome, $link){
            $this->nome =$nome;
            $this->link =$link;

        }
        function get_nome(){
            return $this->nome;
        }
        function get_link(){
            return $this->link;
        }

    }
   /* $curso = new curso("Programação descomplicada","www.youtube.com/user/progdescomplicada");
    $arraycursos[] = $curso;

    $curso = new curso("Curso PHP moderno","https://www.youtube.com/watch?v=dLHlHTsFqvk");
    $arraycursos[] = $curso;

    $curso = new curso("Curso de JavaScrip", "https://www.youtube.com/watch?v=Ptbk2af68e8");
    $arraycursos[] = $curso;

    //print_r($arraycursos);
    $catalogo = $arraycursos;
    echo '<h4>Cursos:</h4>';
    echo '<ul>';
    foreach ($catalogo as $curso) {
        echo '<li>' . $curso->get_nome() . ' - ' . $curso->get_link() . '</li>';
    }
    echo '</ul>';*/

?>