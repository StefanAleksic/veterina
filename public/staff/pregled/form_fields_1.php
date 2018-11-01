<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($pregled)) {
  redirect_to(url_for('/staff/pregled/index.php'));
}
?>
<?php require_once('../../../private/shared/JQ_header.php'); ?>
<dl>
  <dt>Datum</dt>
  <dd><input type="text" id="datepicker" name="pregled[date]" value="<?php echo h($pregled->date); ?>" /></dd>
</dl>
<dl>
    <!--
<dt>Broj kartona</dt> 
<dd>
<select name="pregled[br_kartona]">
    <?php
        $sql = "SELECT * FROM lista";
        $result = $database->query($sql);
        if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            //echo $row["id"];
    

        ?>
    <option value="<?php echo $row["id"]; ?>"><?php echo $row["id"]. "/". $row["ime_pet"]. "/". $row["ime"]. " " . $row["prezime"]; ?></option>
        <?php 
        }
        } 
        ?>
</select>
</dd>
</dl>
    -->
<!--
<dl>
  <dt>Broj kartona test</dt>
  <dd><input type="text" name="pregled[br_kartona]" value="<?php echo h($pregled->br_kartona); ?>" /></dd>
</dl>
-->
<dl>
  <dt>Broj kartona</dt>
  <dd><input type="text" name="pregled[br_kartona]" value="<?php echo h($pregled->br_kartona); ?>" /></dd>
</dl>
<dl>
  <dt>Anamneza</dt>
  <dd><textarea name="pregled[anamneza]" rows="4" cols="60"><?php echo h($pregled->anamneza) ?></textarea></dd>
</dl>
<dl>
  <dt>Klinički pregled</dt>
  <dd><textarea name="pregled[klin_pregled]" rows="4" cols="60"><?php echo h($pregled->klin_pregled) ?></textarea></dd>
</dl>


<dl>
  <dt>Dg/Th/Cena</dt>
  <dd><input type="text" name="pregled[dijagnoza]" value="<?php echo h($pregled->dijagnoza) ?>"</textarea></dd>
  <dd><input type="text" name="pregled[terapija]" value="<?php echo h($pregled->terapija); ?>" /></dd>
  <dd><input type="text" name="pregled[cena]" value="<?php echo h($pregled->cena); ?>" /></dd>
</dl>

<dl>
  <dt>Dg/Th/Cena</dt>
  <dd><input type="text" name="pregled[dijagnoza1]" value="<?php echo h($pregled->dijagnoza1) ?>"</textarea></dd>
  <dd><input type="text" name="pregled[terapija1]" value="<?php echo h($pregled->terapija1); ?>" /></dd>
  <dd><input type="text" name="pregled[cena1]" value="<?php echo h($pregled->cena1); ?>" /></dd>
</dl>
<dl>
  <dt>Dg/Th/Cena</dt>
  <dd><input type="text" name="pregled[dijagnoza2]" value="<?php echo h($pregled->dijagnoza2) ?>"</textarea></dd>
  <dd><input type="text" name="pregled[terapija2]" value="<?php echo h($pregled->terapija2); ?>" /></dd>
  <dd><input type="text" name="pregled[cena2]" value="<?php echo h($pregled->cena2); ?>" /></dd>
</dl>
<dl>
  <dt>Dg/Th/Cena</dt>
  <dd><input type="text" name="pregled[dijagnoza3]" value="<?php echo h($pregled->dijagnoza3) ?>"</textarea></dd>
  <dd><input type="text" name="pregled[terapija3]" value="<?php echo h($pregled->terapija3); ?>" /></dd>
  <dd><input type="text" name="pregled[cena3]" value="<?php echo h($pregled->cena3); ?>" /></dd>
</dl>
<dl>
  <dt>Dg/Th/Cena</dt>
  <dd><input type="text" name="pregled[dijagnoza4]" value="<?php echo h($pregled->dijagnoza4) ?>"</textarea></dd>
  <dd><input type="text" name="pregled[terapija4]" value="<?php echo h($pregled->terapija4); ?>" /></dd>
  <dd><input type="text" name="pregled[cena4]" value="<?php echo h($pregled->cena4); ?>" /></dd>
</dl>
