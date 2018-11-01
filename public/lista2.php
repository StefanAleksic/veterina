<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Lista svih ljubimaca'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>
<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 8;
$total_count = Lista::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

?>

<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/cat-dog.png') ?>" />
      <h2>Lista ljubimaca</h2>
      <p>Na listi se nalaze svi ljubimci iz naše baze.</p>
      
    </div>
      

      <table id="inventory">
      <tr>
        <th>Broj kartona</th>
        <th>Ime ljubimca</th>
        <th>Prezime</th>
        <th>Ime</th>
        <th>JMBG</th>
        <th>Pol</th>
        <th>Status</th>
        <th>Sudijski rang</th>
        <th>Sudijska lista</th>
        <th>Prebivalište</th>
        <th>Detalji</th>
      </tr>
<?php '<br/>' ?>
<?php


$sudije = Lista::find_all();

?>
      <?php foreach($sudije as $sudija) { ?>
      <tr>
          <td><?php echo h(Lista::id()); ?></td>
        <td><?php echo h($sudija->ime_pet); ?></td>
        <td><?php echo h($sudija->prezime); ?></td>
        <td><?php echo h($sudija->ime); ?></td>
        <td><?php echo h($sudija->jmbg); ?></td>
        <td><?php echo h($sudija->pol()); ?></td>
        <td><?php echo h($sudija->state); ?></td>
        <td><?php echo h($sudija->rang()); ?></td>
        <td><?php echo h($sudija->sud_lista()); ?></td>
        <td><?php echo h($sudija->prebivaliste); ?></td>
        <td><a href="detalji.php?id=<?php echo $sudija->id ; ?>">Detaljnije</a> </td>
      </tr>
      <?php } ?>
      
      </table>
      <p>&nbsp;</p>
      <?php include(SHARED_PATH . '/public_footer.php'); ?>
  </div>
    
    
  
    
        