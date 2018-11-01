
<?php require_once('../private/initialize.php'); ?>

<?php include(SHARED_PATH . '/public_header.php'); ?>
<?php $page_title = 'Početna'; ?>

<div id="main">

  <ul id="menu">
    <li><a href="<?php echo url_for('staff/ljubimci/index.php'); ?>">Lista ljubimaca</a></li>
    <li><a href="<?php echo url_for('staff/ljubimci/pretraga.php'); ?>">Pretraga</a></li>
    <li><a href="<?php echo url_for('/staff/index.php'); ?>">Administracija</a></li>
  </ul>
    
</div>

<?php $super_hero_image = 'dog-with-doctor.jpg'; ?>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
