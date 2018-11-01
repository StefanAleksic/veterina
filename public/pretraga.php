<?php require_once('../private/initialize.php'); ?>

<?php $page_title = 'Pretraga'; ?>
<?php include(SHARED_PATH . '/public_header.php'); ?>


<div id="main">

  <div id="page">
    <div class="intro">
      <img class="inset" src="<?php echo url_for('/images/cat-dog.png') ?>" />
      <h2>Lista sudija UOSGB</h2>
      <p>Na listi se nalaze sve sudije bez obzira na trenutni status.</p>
      
    </div>
      

      <table id="inventory">
      <tr>
        <th>Redni broj</th>
        <th>Br. legitimacije</th>
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

<?php
$searchq = "";
$sudije = [];

if(isset($_POST['search'])){
$searchq = $_POST['search'];
$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

$sql = "SELECT * FROM lista2 WHERE ";
$sql .= "prezime LIKE '%$searchq%'";

    $sudije = Lista2::find_by_sql($sql);
//$sudije = Lista2::find_all();
}
?>
      <?php foreach($sudije as $sudija) { ?>
      <tr>
          <td><?php echo h(Lista2::id()); ?></td>
        <td><?php echo h($sudija->br_leg); ?></td>
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
  </div>
    <div>
           
    <div>
    <p>Pretraga po prezimenu</p>
    <form action="../public/pretraga.php" method="post">
        <input type="text" name="search" placeholder="Pretraga po prezimenu..." />
        <input type="submit" value="Potvrdi" />
    </form>
    </div>
    
    <div>
        <?php include(SHARED_PATH . '/public_footer.php'); ?>
    </div>
    </div>
    
  
    
        