<?php

require_once('../../../private/initialize.php');
require_login() ;

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/ljubimci/index.php'));
}
$id = $_GET['id'];
$ljubimac = Lista::find_by_id($id);
  if($ljubimac == false){
      redirect_to(url_for('/staff/ljubimci/index.php'));
  }

if(is_post_request()) {

  // Save record using post parameters
  $args = $_POST['ljubimac'];
  
  $ljubimac->merge_attributes($args);
  $result = $ljubimac->save();

  if($result === true) {
    $_SESSION['message'] = 'Upis ljubimca je urađen uspešno';
    redirect_to(url_for('/staff/ljubimci/show.php?id=' . $id));
  } else {
    // show errors
  }

} else {

  // display the form
  
}

?>

<?php $page_title = 'Izmeni podatke'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/ljubimci/index.php'); ?>">&laquo; Povratak na listu</a>

  <div class="bicycle edit">
    <h1>Izmeni podatke</h1>

    <?php echo display_errors($ljubimac->errors); ?>

    <form action="<?php echo url_for('/staff/ljubimci/edit.php?id=' . h(u($id))); ?>" method="post">

      <?php include('form_fields.php'); ?>
      
      <div id="operations">
        <input type="submit" value="Izmeni podatke" />
      </div>
    </form>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
