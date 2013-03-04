<?php
$arrIncludeCssCommon = array(
    "main.css"
);

$arrIncludeCssCustom = array(
);
?>

<!--Importando CSS comum para páginas-->
<?php
if ($arrIncludeCssCommon) {
    foreach ($arrIncludeCssCommon as $css) {
        ?>
        <link href="<?php echo $root_path ?>/css/<?php echo $css ?>" rel="stylesheet" type="text/css" />
        <?php
    }
}
?>

<!--Importando CSS customizado para páginas-->
<?php
if (!empty($includeKey) && isset($includeKey) && array_key_exists($includeKey, $arrIncludeCssCustom)) {
    foreach ($arrIncludeCssCustom as $key => $css) {
        if ($key == $includeKey) {
            ?>
            <link href="<?php echo $root_path ?>/css/<?php echo $css ?>" rel="stylesheet" type="text/css" />
            <?php
        }
    }
}
?>



