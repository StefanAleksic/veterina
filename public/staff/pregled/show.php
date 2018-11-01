<?php require_once('../../../private/initialize.php'); ?>
<?php require_login() ; ?>

<?php

$id = $_GET['id'] ?? '1'; // PHP > 7.0
$pregled = Pregled::find_by_id($id);
include ('../../../private/sql_query.php');  

?>

<?php $page_title = 'Pregled: ' . h($pregled->id); ?>
<?php include(SHARED_PATH . '/public_header2.php'); ?>
<p>&nbsp</p>
<?php include(SHARED_PATH . '/staff_header.php'); ?>

<div id="content">
<a class="back-link" href="<?php echo url_for('/staff/pregled/index.php'); ?>">&laquo; Povratak na listu pregleda</a>
<br />
<a class="back-link" href="<?php echo url_for('/staff/ljubimci/index.php'); ?>">&laquo; Povratak na listu ljubimaca</a>
<br />
<a class="back-link" href="<?php echo url_for('/staff/pregled/show_print.php?id=' . h(u($pregled->id))); ?>" target="_blank">&laquo; Verzija za štampu</a>
  <div class="admin show">

      <h1>&nbsp;</h1>

    <div class="attributes">
      <dl>
        <dt>Datum</dt>
        <dd><?php echo h($pregled->euro_date($pregled->date)); ?></dd>
      </dl>
      <dl>
        <dt>Broj kartona</dt>
        <dd><?php echo h($pregled->br_kartona); ?></dd>
      </dl>
      <dl>
       <?php foreach($lista as $liste) { ?>
        <dl>
        <dt>Ime ljubimca</dt>
        <dd><?php echo h($liste->ime_pet); ?></dd>
      </dl>
      <?php } ?>
      <?php foreach($lista6 as $liste) { ?>
        <dl>
        <dt>Vrsta</dt>
        <dd><?php echo h($liste->vrsta); ?></dd>
      </dl>
      <?php } ?>
      <?php foreach($lista7 as $liste) { ?>
        <dl>
        <dt>Rasa</dt>
        <dd><?php echo h($liste->rasa); ?></dd>
      </dl>
      <?php } ?>
          <h4>Podaci o vlasniku</h4>
        <?php foreach($lista2 as $liste) { ?>
        <dl>
        <dt>Ime</dt>
        <dd><?php echo h($liste->ime); ?></dd>
      </dl>
      <?php } ?>
        <?php foreach($lista3 as $liste) { ?>
        <dl>
        <dt>Prezime</dt>
        <dd><?php echo h($liste->prezime); ?></dd>
      </dl>
      <?php } ?>
        <?php foreach($lista5 as $liste) { ?>
        <dl>
        <dt>Adresa</dt>
        <dd><?php echo h($liste->adresa); ?></dd>
      </dl>
      <?php } ?>
        <?php foreach($lista4 as $liste) { ?>
        <dl>
        <dt>Broj telefona</dt>
        <dd><?php echo h($liste->br_tel); ?></dd>
      </dl>
      <?php } ?>  
          <dl>
        <dt>Anamneza</dt>
        <dd><?php echo h($pregled->anamneza); ?></dd>
      </dl>
          <dl>
        <dt>Klinički pregled</dt>
        <dd><?php echo h($pregled->klin_pregled); ?></dd>
      </dl>
      <!--<dl>
        <dt>Dijagnoza</dt>
        <dd><?php echo h($pregled->dijagnoza); ?></dd>
      </dl>-->
        
        <table class="list">
      <tr>
        <th>Dijagnoza</th>
        <th>Terapija</th>
        <th>Cena</th>
      </tr>
        <tr>
          <td><?php echo h($pregled->dijagnoza); ?></td>
          <td><?php echo h($pregled->terapija); ?></td>
          <td><?php echo h($pregled->cena); ?></td>
    	  </tr>
          <?php if($pregled->terapija1 != "" ) {?>
          <tr>
          <td><?php echo h($pregled->dijagnoza1); ?></td>    
          <td><?php echo h($pregled->terapija1); ?></td>
          <td><?php echo h($pregled->cena1); ?></td>
          </tr>
          <?php } ?> 
           <?php if($pregled->terapija2 != "" ) {?>
          <tr>
          <td><?php echo h($pregled->dijagnoza2); ?></td>    
          <td><?php echo h($pregled->terapija2); ?></td>
          <td><?php echo h($pregled->cena2); ?></td>
          </tr>
          <?php } ?> 
          <?php if($pregled->terapija3 != "" ) {?>
          <tr>
          <td><?php echo h($pregled->dijagnoza3); ?></td>    
          <td><?php echo h($pregled->terapija3); ?></td>
          <td><?php echo h($pregled->cena3); ?></td>
          </tr>
          <?php } ?> 
          <?php if($pregled->terapija4 != "" ) {?>
          <tr>
          <td><?php echo h($pregled->dijagnoza4); ?></td>
          <td><?php echo h($pregled->terapija4); ?></td>
          <td><?php echo h($pregled->cena4); ?></td>
          </tr>
          <?php } ?> 
          <tr>
              <td>&nbsp;</td>
          <td class="bold" >Ukupno: </td>
          <td class="bold1"><?php echo h($pregled->sum().".00"); ?></td>
    	  </tr>
  	</table>
    </div>

  </div>

</div>
