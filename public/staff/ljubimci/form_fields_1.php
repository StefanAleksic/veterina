<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($sudija)) {
  redirect_to(url_for('/staff/sudije/index.php'));
}
?>

<dl>
  <dt>Legitimacija</dt>
  <dd><input type="text" name="br_leg" value="<?php echo h($sudija->br_leg) ?>" /></dd>
</dl>

<dl>
  <dt>Ime</dt>
  <dd><input type="text" name="ime" value="<?php echo h($sudija->ime) ?>" /></dd>
</dl>

<dl>
  <dt>Prezime</dt>
  <dd><input type="text" name="prezime" value="<?php echo h($sudija->prezime) ?>" /></dd>
</dl>

<dl>
  <dt>JMBG</dt>
  <dd>
    <dd><input type="text" name="jmbg" value="<?php echo h($sudija->jmbg) ?>" /></dd>
  </dd>
</dl>

<dl>
  <dt>Pol</dt>
  <dd>
    <select name="pol">
      <option value=""></option>
    <?php foreach(Lista2::POL as $pol_id => $pol_name) { ?>
      <option value="<?php echo $pol_id; ?>"<?php if($sudija->pol == $pol_id) { echo 'selected'; } ?>><?php echo $pol_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Status</dt>
  <dd>
    <select name="state">
      <option value=""></option>
    <?php foreach(Lista2::STATE as $state) { ?>
      <option value="<?php echo $state; ?>"<?php if($sudija->state == $state) { echo 'selected'; } ?>><?php echo $state; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>
<dl>
  <dt>Sudijski rang</dt>
  <dd>
    <select name="rang">
      <option value=""></option>
    <?php foreach(Lista2::SUDIJSKI_RANG as $rang_id => $rang_name) { ?>
      <option value="<?php echo $rang_id; ?>"<?php if($sudija->rang == $rang_id) { echo 'selected'; } ?>><?php echo $rang_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Sudijska lista</dt>
  <dd>
    <select name="sud_lista">
      <option value=""></option>
    <?php foreach(Lista2::LISTA as $sud_lista_id => $sud_lista_name) { ?>
      <option value="<?php echo $sud_lista_id; ?>"<?php if($sudija->sud_lista == $sud_lista_id) { echo 'selected'; } ?>><?php echo $sud_lista_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>

<dl>
  <dt>Prebivalište</dt>
  <dd> <input type="text" name="prebivaliste" value="<?php echo h($sudija->prebivaliste) ?>" /></dd>
</dl>

<dl>
  <dt>Opis</dt>
  <dd><textarea name="description" rows="5" cols="50"><?php echo h($sudija->description) ?></textarea></dd>
</dl>
