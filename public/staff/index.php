

<?php require_once('../../private/initialize.php'); ?>

<?php require_login() ; ?>

<?php $page_title = 'Administratorski panel'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div id="main-menu">
    <h2>Administratorski panel</h2>
    <ul>
      <li><a href="<?php echo url_for('/staff/ljubimci/index.php'); ?>">Lista ljubimaca</a></li>
      <li><a href="<?php echo url_for('/staff/pregled/index.php'); ?>">Lista pregleda</a></li>
      <li><a href="<?php echo url_for('/staff/admins/index.php'); ?>">Lista administratora</a></li>
      <li><a href="<?php echo url_for('/staff/ljubimci/pretraga.php'); ?>">Pretraga</a></li>
      <li><a href="<?php echo url_for('/staff/pregled/izvestaj.php'); ?>">Izveštaj</a></li>
    </ul>
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
