<?php
if(empty($_POST["nome"])||empty($_POST["email"])||empty($_POST["assunto"])||empty($_POST["comentario"])){
    echo "<p class='text-danger'>Preencha todos os campos corretamente</p>";
    exit;                    
} else {                        
    $nome = $_POST["nome"];                        
    $email = $_POST["email"];                        
    $cidade = $_POST["assunto"];                        
    $uf = $_POST["comentario"];                        
    $query = "INSERT INTO clientes(`nome`,`email`,`assunto`,`comentario`) VALUES ('$nome', '$email','$assunto','$comentario')";                        
    if(mysqli_query($mysqli, $query)){
        echo "<p class='text-success'>Os dados foram inseridos corretamente. Verifique o resultado na aba Exibir.</p>";                         
    } else{                            
        echo "<p class='text-danger'>Houve um erro.</p><p>Nenhum dado foi inserido.</p>".mysqli_error($mysqli);                        
    }                    
}                    
mysqli_close($mysqli);                
?>