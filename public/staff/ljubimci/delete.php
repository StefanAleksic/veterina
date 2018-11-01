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

  // Delete bicycle
  $result = $ljubimac->delete();
  $_SESSION['message'] = 'Ljubimac je izbrisan uspešno.';
  redirect_to(url_for('/staff/ljubimci/index.php'));

} else {
  // Display form
}
$lista = new Lista;
?>

<?php $page_title = 'Izbrišite ljubimce'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/staff/ljubimci/index.php'); ?>">&laquo; Povratak na listu</a>

  <div class="bicycle delete">
    <h1>Izbrisati karton ljubimca</h1>
    <p>Da li ste sigurni da želite da izbrišete?</p>
    <p class="item"><?php echo h($ljubimac->ime()); ?></p>

    <form action="<?php echo url_for('/staff/ljubimci/delete.php?id=' . h(u($id))); ?>" method="post">
      <div id="operations">
        <input type="submit" name="commit" value="Izbrisati karton" />
      </div>
    </form>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
