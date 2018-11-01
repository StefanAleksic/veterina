<!doctype html>

<html lang="en">
  <head>
    <title>WEBVET <?php if(isset($page_title)) { echo '- ' . h($page_title); } ?></title>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2">
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1250">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/public.css'); ?>" />
    <script type="text/javascript" src="<?php echo url_for('/stylesheets/jquery-3.3.1.js"'); ?>></script>
    <script type="text/javascript">
        $("document").ready(function() {
    $("#inventory tr:even").css("background-color","#eef");
        });
    </script>
  </head>

  <body>
    <header>
      <h1>
        <a href="<?php echo url_for('/index.php'); ?>">
          <img class="bike-icon" src="<?php echo url_for('/images/cat-dog-man.png') ?>" /><br />
          WEBVET
        </a>
      </h1>
    </header>
