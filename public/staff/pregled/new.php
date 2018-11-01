<?php
//pregled
require_once('../../../private/initialize.php');
require_login() ;

if(is_post_request()) {

  // Create record using post parameters
  $args = $_POST['pregled'];
  $pregled = new Pregled($args);
  $result = $pregled->save();

  if($result === true) {
    $new_id = $pregled->id;
    $_SESSION['message'] = 'Uspešno ste dodali pregled';
    redirect_to(url_for('/staff/pregled/show.php?id=' . $new_id));
  } else {
    // show errors
  }
} else {
  // display the form
  $pregled = new Pregled;
}
?>
<?php $page_title = 'Dodajte pregled'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pregled/index.php'); ?>">&laquo; Povratak na listu</a>

  <div class="admin new">
    <h1>Dodaj pregled</h1>

    <form action="<?php echo url_for('/staff/pregled/new.php'); ?>" method="post">

      <?php include('form_fields.php'); ?>
        
        <?php echo display_errors($pregled->errors); ?>

      <div id="operations">
        <input type="submit" value="Dodaj" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
