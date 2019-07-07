


<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>LanguageLingo - Home</title>
    <link rel="icon" href="imagens/favicon.ico">

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="estilo.css" rel="stylesheet">
    <link href="bootstrap/js/bootstrap.min.js">  
    
      <!-- jquery -->
     <script src="jquery-3.2.1.min.js"></script>
        
        <script type="text/javascript">
      
            	$(document).ready(function(){

		});
      
      
      
      
      
        </script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-fixed-top navbar-inverse navbar-transparente">
      <div class="container">
        
        <!-- header -->
        <div class="navbar-header">

           <!-- botao toggle -->
          <button type="button" class="navbar-toggle collapsed"
                  data-toggle="collapse" data-target="#barra-navegacao">
            <span class="sr-only">alternar navegação</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <a href="index.php" class="navbar-brand">
            <span class="img-logo">LanguageLingo</span>
          </a>

        </div>

        <!-- navbar -->
        <div class="collapse navbar-collapse" id="barra-navegacao">
          <ul class="nav navbar-nav navbar-right">  
              <li><a href="#curso">Sobre o Curso</a></li>
             <li><a href="#sobre">Sobre Nós</a></li>
              <li><a href="#contato">Contato</a></li>
          </ul>
        </div>
      </div><!-- /container -->
    </nav><!-- /nav -->

    <div class="capa">
      <div class="texto-capa">        
          <h1>Would you like to learn English?</h1> 
          <h2>Você gostaria de aprender inglês???</h2>      
  
      </div>
    </div>  
   
    <!-- Curso -->
    <section id="curso">
      <div class="container">
        <div class="row">

          <!-- Informações sobre o curso-->
            <div class="page-header">
                <h2>Visão Geral do Curso</h2>
            </div>
            
            <div class="col-md-12">
                <h3>LanguageLingo lhe oferece um programa de inglês online com um professor altamente qualificado que irá lhe ensinar o idioma, e você fará isso no conforto da sua casa.</h3>
            </div>
            
            
            
        </div>
      </div>
    </section>

    <section id="sobre">
      <div class="container">
        <div class="row">
          
          <!-- Sobre -->
          <div class="col-md-12">
            <h2>Who we are?</h2><br>
            <div class="col-md-12">  
                <h4> <span style=" font-size: 100px; margin-bottom: 10px;"> L</span>anguage <span style=" font-size: 100px; margin-bottom: 10px;">L</span>ingo emerge como uma ideia sólida para fornecer aulas de inglês de forma mais eficaz e acessível. <br/><br/>   
                
               A ideia é desenvolvida por dois grandes amigos, que foram capazes de identificar que as aulas regulares de inglês podem ser longas e cansativas e o mais importante, muito caras. Então eles pensaram em criar um site para todos aqueles que querem aprender o idioma de um jeito divertido e prático, possam conhecer pessoas em todo o mundo e conversar. Assim, aprender e praticar ao mesmo tempo.
               Acreditamos que o aprendizado de qualquer idioma se dá a frequente exposição ao mesmo.<br/><br>

               <span style="text-shadow: 0px 0px 20px white; ">Marthin Korb e Ivan Lazala</span> sentem-se muito felizes em poder desenvolver o trabalho com LanguageLingo, pois aceditam que a aprendizagem deve ser acessível a todos.<br/><br>

                <span style=" font-size: 100px; margin-bottom: 10px;"> L</span>anguage <span style=" font-size: 100px; margin-bottom: 10px;">L</span>ingo é para você.</h4>
            </div>

          </div>
            
        <div class="row">
            <div class="col-md-6">
            
                <img class="img img-thumbnail" class="img-responsive"  src="imagens/Marthin_Insta.png" id="img_sobre">
                <div class="row">                
                    
                    <ul>
                        <h3>Marthin Korb</h3>
                        <strong>
                            <li><p>- Estudante de TI</p></li>
                            <li><p><a href="http://www.liberato.com.br">- Fundação Escola Técnica Liberato Salzano Vieira da Cunha</a></p></li>
                            <li><p>- Programador Front-End na empresa IMage Web Studio</p></li>

                        </strong>
                    </ul>
                </div>
            </div> 
            
            <div class="col-md-6" >            
                    <img class="img img-thumbnail" class="img-responsive"  src="imagens/ivan.png" id="img_sobre">
                <div class="row">                    
                    <ul>
                         <h3>Ivan Lazala</h3>
                        <strong>
                            <li><p>- Estudante de TI</p></li>
                            <li><p>- Programador Back-End na empresa IMage  Web Studio</p></li>
                            <li><p>- English Teacher</p></li>
                        </strong>
                    </ul>
                </div>
            </div>             
        </div>
    </div>
</div>
</section>

    <!-- Formulário -->
    <section id="contato"> 
    <form id="formulario" method="post" action="formulario.php">   
        <div class="container">
          
            <div class="page-header">
              <h2>Contate-nos</h2>
            </div>

              <div class="row">
                  
                  <div class="col-md-4">          
                      
                     <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu nome" required="requiored">
                     </div>

                     <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" name="email" class="form-control" id="email" placeholder="Digite seu e-mail" required="requiored">
                     </div>
                        
                    <div class="form-group">
                        <label for="message-text" class="control-label">Mensagem</label>
                        <textarea name="mensagem" class="form-control" id="message-text" placeholder="Deixe-nos aqui sua mensagem" required="requiored"></textarea>
                    </div>                       

                      <div>
                         <button type="submit" class="btn btn-primary form-control">Inscreva-se</button>                          
                      </div>                      
                  </div>                  
                
              
                
              </div> 
        </div> 
  </form>
</section> 

    <!-- Rodape -->
<footer id="rodape">
      <div class="container">
        <!--<div class="row">!-->
          
       <div class="col-md-4 col-xs-12">
            <h4>CONTATO</h4>
            <p><a href="mailto:languagelingoinfo@gmail.com"> E-mail: languagelingoinfo@gmail.com</a></p>
           
           <h4>TELEFONES</h4>
           <p><a href="tel:51 9 9999-9999">(51) 9 9993-8435 - Vivo</a></p>
       </div>
            
            <div class="col-md-4 col-xs-12">
                <address>
                    <strong><h4>LanguageLingo</h4></strong>
                    <p>Conosco, você aprende falando!</p>
                </address>

            </div>

          <div class="col-md-4 col-xs-12" id="redes_sociais">
            <ul class="nav">              
              <li class="item-rede-social"><a href=""><img src="imagens/twitter.png"></a></li>
              <li class="item-rede-social"><a href="https://www.instagram.com/languagelingo/"><img src="imagens/instagram.png"></a></li>
              <li class="item-rede-social"><a href=""><img src="imagens/facebook.png"></a></li>
            </ul>

          </div>            

        <!--</div> /row -->

      </div>

    </footer>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>