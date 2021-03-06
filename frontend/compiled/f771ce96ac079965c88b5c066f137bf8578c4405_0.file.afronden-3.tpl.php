<?php
/* Smarty version 3.1.30, created on 2018-07-02 21:01:31
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-3.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b3a768baf15a9_16830241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f771ce96ac079965c88b5c066f137bf8578c4405' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-3.tpl',
      1 => 1530555451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b3a768baf15a9_16830241 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afronden-3">

  <img alt="School" class="school-svg" src="assets/images/school.svg" />
  <span class="start-tekst">School informatie</span>
  <label for="uw_functie">
    <i class="fa fa-graduation-cap"></i>
    <input id="uw_functie" name="uw_functie" type="text" placeholder="Uw functie" autocomplete="off" spellcheck="false" />
  </label>

  <label for="naam_school">
    <i class="fa fa-building-o"></i>
    <input id="naam_school" name="naam_school" type="text" placeholder="Naam van de school" autocomplete="off" spellcheck="false" />
  </label>

  <label for="plaats_school">
    <i class="fa fa-map-marker"></i>
    <input id="plaats_school" name="plaats_school" onkeyup="showHint(this.value)" type="text" placeholder="Plaats van de school" autocomplete="off" spellcheck="false" />
  </label>

<div class="suggestie-plaats">
  Suggestie(s): <br />
  <span id="txtHint"></span>
</div>

  <?php echo '<script'; ?>
>
    function showHint(str) {
        if (str.length == 0) {
            document.getElementById("txtHint").innerHTML = "";
            return;
        } else {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById("txtHint").innerHTML = this.responseText;
                }
            };
            xmlhttp.open("GET", "gethint.php?q=" + str, true);
            xmlhttp.send();
        }
    }
<?php echo '</script'; ?>
>


  <div class="buttons">

  <button tabindex="-1" type="button" id="terug-naar-afronden-2" class="btn btn-grijze-outline">
    <img alt="Vorige" class="vorige-svg" src="assets/images/vorige.svg" />
    Vorige
  </button>

  <button tabindex="-1" type="button" id="naar-afronden-4" class="btn btn-roze">
    Volgende
    <img alt="Volgende" class="volgende-svg" src="assets/images/volgende.svg" />
  </button>
  </div>
</fieldset>
<?php }
}
