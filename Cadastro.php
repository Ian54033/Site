<?php
?>


<!doctype html>
<html lang="en">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
    <link rel = "preconnect" href = "https://fonts.googleapis.com">
<link rel = "preconnect" href = "https://fonts.gstatic.com" crossorigin>
<link href = "https: //fonts.googleapis.com/css2? family = Roboto: ital, wght @ 0,300; 0,400; 0,500; 0,700; 0,900; 1,400 & display = swap "rel =" stylesheet ">
        <title>home - focus</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="css/estilos.css" >
        <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="js/main.js"></script>
        <script src="js/bootstrap.min.js"></script>
        
        
        


        
<div id="cadastro">
    <div class="container">
        <div class="row">
            <div class="fundo col-md-6 text-center">
                <h5 class="text">Bem Vindo</h5>
                <h5 class="text">Conecte-se novamente</h5>
                <h5 class="text">Faça seu Login</h5>
                <a href="Login.php" class="btn btn-primary button">Login</a>
            </div>

            <div class="fundo2 col-md-6 align-self-center text-center">
                <img src="img/img logo.png" class="img-fluid"/>
                <h5 class="text1">Crie Sua Conta</h5>
                <ul>
                         <li>
                             <a href="#"><img src="img/Google Plus.png"/></a>
                         </li>
                         <li>
                             <a href="#"><img src="img/Facebook.png"/></a>
                         </li>
                         <li>
                             <a href="#"><img src="img/Linkedin.png"/></a>
                         </li>
                     </ul>

                     <form class="form-inline">
                        <div class="form-group">
                         <label for="inputNome" class="text4"></label>
                          <input type="text" class="form-control" id="inputNome" placeholder="Nome">
                        </div>
                        <div class="form-group">
                           <label for="exampleInputEmail1" class="text4"></label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Seu email">
                         </div>
                         <div class="form-group">
                            <label for="inputPassword5" class="text4"></label>
                            <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Senha">
                            <small id="passwordHelpBlock" class="form-text text-muted text3">
                                                            Sua senha deve ter entre 8 e 20 caracteres, os quais devem ser letras e números, sem espaços, caracteres especiais.
                            </small>
                         </div>
                        <div class="form-group">
                           <label for="inputPassword5" class="text4"></label> 
                          <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" placeholder="Confirmação de Senha">
                          <small id="passwordHelpBlock" class="form-text text-muted text3">
                                  Sua senha deve ter entre 8 e 20 caracteres, os quais devem ser letras e números, sem espaços, caracteres especiais.
                          </small>
                        </div>

  <!--Termos de Uso-->
  <div class="termo mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Li e Concordo com os <a href="Termos de Uso/Focus - Termos de Uso.pdf" target="_blank">Termos de Uso</a></label>
  </div>
<!--Termos de Uso-->

  </form>

  
  <form class="form-inline" action="Email.php">
  <button type="submit" class="btn btn-primary button1">Confirmar</button>
  </form>


            </div>

        </div>

    </div>
</div>




        
       
        </body>
    </head>
</html>









































