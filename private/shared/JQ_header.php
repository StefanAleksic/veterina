
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>jQuery UI Datepicker - Format date</title>
  <script type="text/javascript" src="<?php echo url_for('/stylesheets/jquery-3.3.1.js"'); ?>></script>
  <script type="text/javascript" src="<?php echo url_for('/stylesheets/jquery-ui.min.js"'); ?>></script>
  <link rel="stylesheet" media="all" href="<?php echo url_for('/stylesheets/jquery-ui.min.css'); ?>" />
  <link rel="stylesheet" href="/public/stylesheets/jquery-ui-1.12.1.custom/jquery-ui.min.js">
  <link rel="stylesheet" href="/public/stylesheets/jquery-ui-1.12.1.custom/jquery-ui.min.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd"   
    });
  } );
  $( function() {
    $( "#datepicker1" ).datepicker({
      changeMonth: true,
      changeYear: true,
      dateFormat: "yy-mm-dd"   
    });
  } );
  </script>
</head>
