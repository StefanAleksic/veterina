<?php require_once('../../../private/initialize.php'); ?>
<?php require_login() ; ?>
<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 20;
$total_count = Lista::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

// Find all sudije;
// use pagination instead


$sql = "SELECT * FROM lista ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";
$ljubimci = Lista::find_by_sql($sql);

?>
<!--
    
-->
<?php $page_title = 'Pretraga'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="bicycles listing">
    <h1>Pretraga</h1>

    <div class="actions">
        <ul>
  <li><a class="action" href="<?php echo url_for('/staff/ljubimci/new.php'); ?>">Dodaj ljubimca</a></li>
  <li><a class="action" href="<?php echo url_for('/staff/pregled/new.php'); ?>">Dodaj pregled</a></li>
        </ul>
    </div>

  	<table class="list">
      <tr>
        <th>Br. kartona</th>
        <th>Ime ljubimca</th>
        <th>Vrsta</th>
        <th>Rasa</th>
        <th>Pol</th>
        <th>Br. čipa</th>
        <th>Ime vlasnika</th>
        <th>Prezime</th>
        <th>Br. telefona</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>
<?php
$searchq = "";
$searchq1 = "";
$searchq2 = "";
$ljubimci = [];

if(isset($_POST['search'])){
$searchq = $_POST['search'];
$searchq = preg_replace("#[^0-9a-z]#i", "", $searchq);

$sql = "SELECT * FROM lista WHERE ";
$sql .= "prezime LIKE '%$searchq%'";

    $ljubimci = Lista::find_by_sql($sql);
}
if(isset($_POST['search1'])&& isset($_POST['search2'])){
$searchq1 = $_POST['search1'];
$searchq1 = preg_replace("#[^0-9a-z]#i", "", $searchq1);
$searchq2 = $_POST['search2'];
$searchq2 = preg_replace("#[^0-9a-z]#i", "", $searchq2);

$sql = "SELECT * FROM lista WHERE ";
$sql .= "ime_pet LIKE '%$searchq1%'";
$sql .= " AND br_cipa LIKE '%$searchq2%'";

    $ljubimci = Lista::find_by_sql($sql);
}
?>
      <?php foreach($ljubimci as $ljubimac) { ?>
        <tr>
          <td><?php echo h($ljubimac->id); ?></td>
          <td><?php echo h($ljubimac->ime_pet); ?></td>
          <td><?php echo h($ljubimac->vrsta); ?></td>
          <td><?php echo h($ljubimac->rasa); ?></td>
          <td><?php echo h($ljubimac->pol()); ?></td>
          <td><?php echo h($ljubimac->br_cipa); ?></td>
          <td><?php echo h($ljubimac->ime); ?></td>
          <td><?php echo h($ljubimac->prezime); ?></td>
          <td><?php echo h($ljubimac->br_tel); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/ljubimci/show.php?id=' . h(u($ljubimac->id))); ?>">Detalji</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/ljubimci/edit.php?id=' . h(u($ljubimac->id))); ?>">Promeni</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/ljubimci/delete.php?id=' . h(u($ljubimac->id))); ?>">Izbriši</a></td>
    	  </tr>
      <?php } ?>
  	</table>
<?php
$url = url_for('/staff/ljubimci/index.php');
echo $pagination->page_links($url);
?>
    <div>
    <p>Pretraga po prezimenu vlasnika</p>
    <form action="../ljubimci/pretraga.php" method="post">
        <input type="text" name="search" placeholder="Prezime vlasnika" />
        <input type="submit" value="Potvrdi" />
    </form>
    </div>
    <div>
    <p>Pretraga po imenu ljubimca i broju čipa</p>
    <form action="../ljubimci/pretraga.php" method="post">
        <input type="text" name="search1" placeholder="Ime ljubimca" />
        <input type="text" name="search2" placeholder="Broj čipa" />
        <input type="submit" value="Potvrdi" />
    </form>
    </div>
    
  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
