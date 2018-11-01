<?php require_once('../../../private/initialize.php'); ?>
<?php require_login() ; ?>

<?php 
if(!$session->is_logged_in()){
    redirect_to(url_for('/staff/login.php'));
}else{
    //Do nothing
}
?>

<?php

$current_page = $_GET['page'] ?? 1;
$per_page = 20;
$total_count = Pregled::count_all();

$pagination = new Pagination($current_page, $per_page, $total_count);

$sql = "SELECT * FROM pregled ";
$sql .= "ORDER by date DESC ";
$sql .= "LIMIT {$per_page} ";
$sql .= "OFFSET {$pagination->offset()}";

$pregledi = Pregled::find_by_sql($sql);

?>
<?php $page_title = 'Pregled'; ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
  <div class="admins listing">
    <h1>Pregledi</h1>

    <div class="actions">
      <a class="action" href="<?php echo url_for('/staff/pregled/new.php'); ?>">Dodajte pregled</a>
    </div>

  	<table class="list">
      <tr>
        <th>ID</th>
        <th>Datum</th>
        <th>Broj kartona</th>
        <th>Dijagnoza</th>
        <th>Cena</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
        <th>&nbsp;</th>
      </tr>

      <?php foreach($pregledi as $pregled) { ?>
        <tr>
          <td><?php echo h($pregled->id); ?></td>
          <td><?php echo h($pregled->euro_date($pregled->date)); ?></td>
          <td><?php echo h($pregled->br_kartona); ?></td>
          <td><?php if($pregled->dijagnoza != ""){
              echo h($pregled->ministring($pregled->dijagnoza));
          };
          if($pregled->dijagnoza1 != ""){
              echo ", ". h($pregled->ministring($pregled->dijagnoza1));
          };
          if($pregled->dijagnoza2 != ""){
              echo ", ". h($pregled->ministring($pregled->dijagnoza2));
          };
          if($pregled->dijagnoza3 != ""){
              echo ", ". h($pregled->ministring($pregled->dijagnoza3));
          };
          if($pregled->dijagnoza4 != ""){
              echo ", ". h($pregled->ministring($pregled->dijagnoza4));
          };
              ?></td>
          <td><?php echo h($pregled->sum().".00"); ?></td>
          <td><a class="action" href="<?php echo url_for('/staff/pregled/show.php?id=' . h(u($pregled->id))); ?>">Detalji</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pregled/edit.php?id=' . h(u($pregled->id))); ?>">Promeni</a></td>
          <td><a class="action" href="<?php echo url_for('/staff/pregled/delete.php?id=' . h(u($pregled->id))); ?>">Izbriši</a></td>
    	  </tr>
      <?php } ?>
  	</table>
    <?php
$url = url_for('/staff/pregled/index.php');
echo $pagination->page_links($url);
?>

  </div>

</div>

<?php include(SHARED_PATH . '/staff_footer.php'); ?>
