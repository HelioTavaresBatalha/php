<?php 
// Serva para recuperar os dados dos formulário:
    if(!isset($_POST["Android"."HTML"."Java"."PHP"."Python"."SQL"."Scratch"]))
        $_POST["Android"."HTML"."Java"."PHP"."Python"."SQL"."Scratch"]="";

        echo "<b>Dados do Formulário</b><br/>";
        echo "Nome: ".$_POST["nome"]. "<br />";
        echo "Email: ".$_POST["email"]. "<br />";
        echo "Telefone: ".$_POST["telefone"]. "<br />";
        echo "Cursos: ".$_POST["cursos"]. "<br />";
        echo "Opção: ".$_POST["opcao"]. "<br />";
        echo "Observações: ".$_POST["observacoes"]. "<br />";
?>