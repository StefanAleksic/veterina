<?php

require_once('../../../private/initialize.php');
require_login() ;

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/pregled/index.php'));
}
$id = $_GET['id'];
$pregled = Pregled::find_by_id($id);
if($pregled == false) {
  redirect_to(url_for('/staff/pregled/index.php'));
}

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['pregled'];
  $pregled->merge_attributes($args);
  $result = $pregled->save();

  if($result === true) {
    $_SESSION['message'] = 'Podešavanja pregleda su uspešno izmenjena.';
    redirect_to(url_for('/staff/pregled/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form

}

?>

<?php $page_title = 'Izmenite pregled'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pregled/index.php'); ?>">&laquo; Povratak na listu</a>

  <div class="admin edit">
    <h1>Izmenite pregled</h1>

    <?php echo display_errors($pregled->errors); ?>

    <form action="<?php echo url_for('/staff/pregled/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields_1.php'); ?>

      <div id="operations">
        <input type="submit" value="Izmenite" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
