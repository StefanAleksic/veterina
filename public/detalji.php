<?php require_once('../private/initialize.php'); ?>

<?php

  // Get requested ID

  $id = $_GET['id'] ?? false;

  if(!$id) {
    redirect_to('lista.php');
  }

  // Find bicycle using ID

  $sudija = Lista::find_by_id($id);
  $lista = new Lista;
?>

<?php $page_title = $sudija->ime(); ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>

<div id="main">

  <a href="lista.php">Povratak na listu sudija</a>
  <p><a href="pretraga.php">Povratak na stranu pretrage</a></p>

  <div id="page">

    <div class="bicycle show">
      <dl>
        <dt>Broj kartona</dt>
        <dd><?php echo h($sudija->id); ?></dd>
      </dl>
      <dl>
      <dl>
        <dt>Datum</dt>
        <dd><?php echo h($lista->euro_date($sudija->date)); ?></dd>
      </dl>
      <dl>
        <dl>
        <dt>Ime ljubimca</dt>
        <dd><?php echo h($sudija->ime_pet); ?></dd>
      </dl>
        <dt>Ime</dt>
        <dd><?php echo h($sudija->ime); ?></dd>
      </dl>
      <dl>
        <dt>Prezime</dt>
        <dd><?php echo h($sudija->prezime); ?></dd>
      </dl>
      <dl>
        <dt>JMBG</dt>
        <dd><?php echo h($sudija->jmbg); ?></dd>
      </dl>
      <dl>
        <dt>Pol</dt>
        <dd><?php echo h($sudija->pol()); ?></dd>
      </dl>
      <dl>
        <dt>Status</dt>
        <dd><?php echo h($sudija->state); ?></dd>
      </dl>
        
      <dl>
        <dt>Sudijski rang</dt>
        <dd><?php echo h($sudija->rang()); ?></dd>
      </dl>
      <dl>
        <dt>Sudijska lista</dt>
        <dd><?php echo h($sudija->sud_lista()); ?></dd>
      </dl>
      <dl>
        <dt>Prebivalište</dt>
        <dd><?php echo h($sudija->prebivaliste); ?></dd>
      </dl>  
      <dl>
        <dt>Detaljni opis</dt>
        <dd><?php echo h($sudija->description); ?></dd>
      </dl>
    </div>

  </div>

</div>

<?php include(SHARED_PATH . '/public_footer.php'); ?>
