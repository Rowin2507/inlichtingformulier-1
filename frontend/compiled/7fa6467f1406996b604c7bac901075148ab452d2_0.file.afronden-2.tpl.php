<?php
/* Smarty version 3.1.30, created on 2018-06-28 11:38:57
  from "C:\Users\Nick\Desktop\Bewijzenmap\Inlichtingformulier\frontend\afronden-2.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b34acb1e5e3c1_58455527',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fa6467f1406996b604c7bac901075148ab452d2' => 
    array (
      0 => 'C:\\Users\\Nick\\Desktop\\Bewijzenmap\\Inlichtingformulier\\frontend\\afronden-2.tpl',
      1 => 1530178395,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b34acb1e5e3c1_58455527 (Smarty_Internal_Template $_smarty_tpl) {
?>
<fieldset id="afronden-2">
  <img class="geslacht-svg" src="assets/images/geslacht.svg" />
  <span class="start-tekst">Bent u een man of een vrouw?</span>

  <div class="geslachten">
    <div class="geslacht">
      <img class="geslacht-man-svg" src="assets/images/geslacht-man.svg" />

      <div class="mui-checkbox geslacht-man-checkbox">
        <input name="uw_geslacht[]" id="geslacht-man geslacht-man-checkbox" type="checkbox" value="man">
        <label for="geslacht-man geslacht-man-checkbox">

        </label>
      </div>
    </div>

    <div class="geslacht">
      <img class="geslacht-vrouw-svg" src="assets/images/geslacht-vrouw.svg" />

      <div class="mui-checkbox">
        <input name="uw_geslacht[]" id="geslacht-vrouw" type="checkbox" value="vrouw">
        <label for="geslacht-vrouw">

        </label>
      </div>
    </div>
  </div>

  <div class="buttons">

  <button tabindex="-1" type="button" id="terug-naar-afronden-1" class="btn btn-grijze-outline">
    <img class="vorige-svg" src="assets/images/vorige.svg" />
    Vorige
  </button>

  <button tabindex="-1" type="button" id="naar-afronden-3" class="btn btn-roze">
    Volgende
    <img class="volgende-svg" src="assets/images/volgende.svg" />
  </button>
  </div>
</fieldset>
<?php }
}