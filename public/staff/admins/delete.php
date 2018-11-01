<?php

require_once('../../../private/initialize.php');
require_login() ;

if(!isset($_GET['id'])) {
  redirect_to(url_for('/staff/admins/index.php'));
}
$id = $_GET['id'];
$admin = Admin::find_by_id($id);
if($admin == false) {
  redirect_to(url_for('/staff/admins/index.php'));
}

if(is_post_request()) {

  // Delete admin
  $result = $admin->delete();
  $_SESSION['message'] = 'Uspešno ste izbrisali administratora';
  redirect_to(url_for('/staff/admins/index.php'));

} else {
  // Display form
}

?>

<?php $page_title = 'Izbrišite Admina'; ?>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/admins/index.php'); ?>">&laquo; Back to List</a>

  <div class="admin delete">
    <h1>Izbrišite Admina</h1>
    <p>Da li ste sigurni da želite da izbiršete admina?</p>
    <p class="item"><?php echo h($admin->full_name()); ?></p>

    <form action="<?php echo url_for('/staff/admins/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Delete Admin" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
