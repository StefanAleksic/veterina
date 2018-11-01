<?php

require_once('../../../private/initialize.php');
require_login() ;

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['ljubimac'];

  $ljubimac = new Lista($args);
  $result = $ljubimac->save();
  
  if($result === true) {
    $new_id = $ljubimac->id;
    $_SESSION['message'] = 'Podaci su uneti uspešno';
    redirect_to(url_for('/staff/ljubimci/show.php?id=' . $new_id));
  } else {
    // show errors
  }

} else {
  // display the form
  $ljubimac = new Lista;
}

?>

<?php $page_title = 'Dodajte novi karton'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/ljubimci/index.php'); ?>">&laquo; Povratak na listu</a>

  <div class="bicycle new">
    <h1>Dodajte karton ljubimca</h1>

    <?php echo display_errors($ljubimac->errors); ?>

    <form action="<?php echo url_for('/staff/ljubimci/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>
      
      <div id="operations">
        <input type="submit" value="Potvrdi" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
