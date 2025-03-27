<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?= bloginfo() ?></title>

    <link type="text/css" media="all" rel="stylesheet" href="<?= bloginfo('stylesheet_url') ?>" />
    <?php
        wp_head();
        if(is_singular() && get_option('thread_comments'))
        {
            wp_enqueue_scripts('comment-reply');
        }
    ?>
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
            <a class="navbar-brand" href="<?= get_home_url() ?>"><?= bloginfo('name') ?></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="identificacaoMenu">
            <ul class="nav navbar-nav">
                <?= wp_list_categories([
                    'orderby=>name',
                    'show_count=> 1',
                    'title_li' => ''
                    ]);
                ?>
            </ul>


            <ul class="nav navbar-nav navbar-right">
              <?php
                wp_list_pages('title_li=');
              ?>

            </ul>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>

    </header>

    