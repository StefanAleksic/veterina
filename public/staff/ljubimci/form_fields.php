<?php
// prevents this code from being loaded directly in the browser
// or without first setting the necessary object
if(!isset($ljubimac)) {
  redirect_to(url_for('/staff/ljubimci/index.php'));
}
?>
<?php require_once('../../../private/shared/JQ_header.php'); ?>
<!---->
<p>Podaci ljubimca</p>
<dl>
  <dt>Ime ljubimca</dt>
  <dd><input type="text" name="ljubimac[ime_pet]" value="<?php echo h($ljubimac->ime_pet) ?>" /></dd>
</dl>
    <dl>
  <dt>Vrsta</dt>
  <dd>
    <select name="ljubimac[vrsta]">
      <option value=""></option>
    <?php foreach(Lista::VRSTA as $vrsta) { ?>
      <option value="<?php echo $vrsta; ?>"<?php if($ljubimac->vrsta == $vrsta) { echo 'selected'; } ?>><?php echo $vrsta; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>
<dl>
  <dt>Rasa</dt>
  <dd><input type="text" name="ljubimac[rasa]" value="<?php echo h($ljubimac->rasa) ?>" /></dd>
</dl>

<dl>
  <dt>Pol</dt>
  <dd>
    <select name="ljubimac[pol]">
      <option value=""></option>
    <?php foreach(Lista::POL as $pol_id => $pol_name) { ?>
      <option value="<?php echo $pol_id; ?>"<?php if($ljubimac->pol == $pol_id) { echo 'selected'; } ?>><?php echo $pol_name; ?></option>
    <?php } ?>
    </select>
  </dd>
</dl>
<dl>
  <dt>Broj čipa</dt>
  <dd><input type="text" name="ljubimac[br_cipa]" value="<?php echo h($ljubimac->br_cipa) ?>" /></dd>
</dl>
<dl>
  <dt>Broj pasoša</dt>
  <dd><input type="text" name="ljubimac[br_pasosa]" value="<?php echo h($ljubimac->br_pasosa) ?>" /></dd>
</dl>
<dl>
  <dt>Datum rođenja ljubimca</dt>
  <dd><input type="text" id="datepicker" name="ljubimac[date]" value="<?php echo h($ljubimac->date) ?>" /></dd>
</dl>
<dl>
  <dt>Opis</dt>
  <dd><textarea name="ljubimac[description]" rows="3" cols="60"><?php echo h($ljubimac->description) ?></textarea></dd>
</dl>    
    <p>Podaci vlasnika</p>

<dl>
  <dt>Ime</dt>
  <dd><input type="text" name="ljubimac[ime]" value="<?php echo h($ljubimac->ime) ?>" /></dd>
</dl>

<dl>
  <dt>Prezime</dt>
  <dd><input type="text" name="ljubimac[prezime]" value="<?php echo h($ljubimac->prezime) ?>" /></dd>
</dl>

<dl>
  <dt>JMBG</dt>
  <dd>
    <dd><input type="text" name="ljubimac[jmbg]" value="<?php echo h($ljubimac->jmbg) ?>" /></dd>
  </dd>
</dl>

<dl>
  <dt>Broj telefona</dt>
  <dd>
    <dd><input type="text" name="ljubimac[br_tel]" value="<?php echo h($ljubimac->br_tel) ?>" /></dd>
  </dd>
</dl>
<dl>
  <dt>Email</dt>
  <dd> <input type="text" name="ljubimac[email]" value="<?php echo h($ljubimac->email) ?>" /></dd>
</dl>    
<dl>
  <dt>Adresa</dt>
  <dd> <input type="text" name="ljubimac[adresa]" value="<?php echo h($ljubimac->adresa) ?>" /></dd>
</dl>







