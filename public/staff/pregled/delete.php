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

  // Delete pregled
  $result = $pregled->delete();
  $_SESSION['message'] = 'Uspešno ste izbrisali pregled';
  redirect_to(url_for('/staff/pregled/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Izbrišite pregled'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/pregled/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin delete">
    <h1>Izbrišite pregled</h1>
    <p>Da li ste sigurni da želite da izbrišete?</p>
    <p class="item"><?php echo "Pregled broj " . h($pregled->id); ?></p>

    <form action="<?php echo url_for('/staff/pregled/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Izbrisati" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
