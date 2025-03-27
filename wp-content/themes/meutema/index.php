<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Template com Bootstrap</title>

    <!-- Bootstrap -->
    <link href="<?= get_template_directory_uri(); ?>/css/bootstrap_tema.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <header>
      <nav class="navbar navbar-default">
        <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#identificacaoMenu" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Bootstrap</a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="identificacaoMenu">
            <ul class="nav navbar-nav">
              <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
              <li><a href="#">Link</a></li>

            </ul>

            <ul class="nav navbar-nav navbar-right">
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>
              <li><a href="#">Link</a></li>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </header>

    <main>
      <div class="container-fluid">
        <div class="row">
            <div class="jumbotron text-center">
              <h1>Template com Bootstrap</h1>
              <p>Curso de Bootstrap do Guia Código</p>
            </div>
        </div>
      </div>
      <div class="container">
        <div class="col-xs-12 col-sm-12 col-md-9">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="thumbnail">
                <img src="https://img.freepik.com/fotos-premium/homem-sentado-com-as-maos-atras-da-cabeca_1301-2839.jpg" alt="imagem">
                <div class="caption">
                  <h3>Título do Conteúdo</h3>
                  <p>Descrição do Conteúdo</p>
                  <p><a href="detalhe.html" class="btn btn-primary" role="button">Ver mais...</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-3">
          <div class="thumbnail">
            <div class="caption">
              <h3>Pesquisar</h3>
              <input type="text" class="form-control">
              <button type="button" class="btn btn-default">Buscar</button>
            </div>
          </div>
          <div class="thumbnail">
            <div class="caption">
              <h3>Artigos Recentes</h3>
              <ul>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
              </ul>
            </div>
          </div>
          <div class="thumbnail">
            <div class="caption">
              <h3>Destaques</h3>
              <ul>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
                <li>Título de Artigo</li>
              </ul>
            </div>
          </div>
        </div>

      </div>
    </main>

    <footer>
      <div class="container text-center">
        <p class="text-muted">by guiaCódigo</p>
      </div>
    </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?= get_template_directory_uri() ?>/js/bootstrap.min.js"></script>
  </body>
</html>
