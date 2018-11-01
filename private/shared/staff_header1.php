<?php
  if(!isset($page_title)) { $page_title = 'Administratorski panel'; }
?>

<!doctype html>

<html lang="en">
  <head>
    <title>WEBVET <?php echo h($page_title); ?></title>
    <meta charset="utf-8">
    <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/staff.css'); ?>" />
    <script type="text/javascript" src="<?php echo url_for('/stylesheets/jquery-3.3.1.js"'); ?>></script>
        <script type="text/javascript">
        $("document").ready(function() {
    $(".list tr:odd").css("background-color","#eef");
        });
    </script>
    <style type='text/css'>
        .highlighted {
            background-color: Red;
        }
    </style>
  </head>

  
    

    
