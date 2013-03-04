<?php
$arrIncludeJsCommon = array(
    "plugins/spinner/ui.spinner.js",
    "plugins/spinner/jquery.mousewheel.js",
    "plugins/charts/excanvas.min.js",
    "plugins/charts/jquery.sparkline.min.js",
    "plugins/forms/uniform.js",
    "plugins/forms/jquery.cleditor.js",
    "plugins/forms/jquery.validationEngine-en.js",
    "plugins/forms/jquery.validationEngine.js",
    "plugins/forms/jquery.tagsinput.min.js",
    "plugins/forms/autogrowtextarea.js",
    "plugins/forms/jquery.maskedinput.min.js",
    "plugins/forms/jquery.dualListBox.js",
    "plugins/forms/jquery.inputlimiter.min.js",
    "plugins/forms/chosen.jquery.min.js",
    "plugins/wizard/jquery.form.js",
    "plugins/wizard/jquery.validate.min.js",
    "plugins/wizard/jquery.form.wizard.js",
    "plugins/uploader/plupload.js",
    "plugins/uploader/plupload.html5.js",
    "plugins/uploader/plupload.html4.js",
    "plugins/uploader/jquery.plupload.queue.js",
    "plugins/tables/datatable.js",
    "plugins/tables/tablesort.min.js",
    "plugins/tables/resizable.min.js",
    "plugins/ui/jquery.tipsy.js",
    "plugins/ui/jquery.collapsible.min.js",
    "plugins/ui/jquery.prettyPhoto.js",
    "plugins/ui/jquery.progress.js",
    "plugins/ui/jquery.timeentry.min.js",
    "plugins/ui/jquery.colorpicker.js",
    "plugins/ui/jquery.jgrowl.js",
    "plugins/ui/jquery.breadcrumbs.js",
    "plugins/ui/jquery.sourcerer.js",
    "plugins/calendar.min.js",
    "plugins/elfinder.min.js",
    "custom.js"
);

$arrIncludeJsCustom = array(
    "admin/home" => "plugins/charts/jquery.flot.js",
    "admin/home" => "plugins/charts/jquery.flot.orderBars.js",
    "admin/home" => "plugins/charts/jquery.flot.pie.js",
    "admin/home" => "plugins/charts/jquery.flot.resize.js",
    "admin/home" => "plugins/charts/chart.js",
);
?>


<!--Importando JS comum para páginas-->
<?php
if ($arrIncludeJsCommon) {
    foreach ($arrIncludeJsCommon as $js) {
        ?>
        <script type="text/javascript" src="<?php echo $root_path ?>/js/<?php echo $js ?>"></script>
        <?php
    }
}
?>

<!--Importando JS customizado para páginas-->
<?php
if (!empty($includeKey) && isset($includeKey) && array_key_exists($includeKey, $arrIncludeJsCustom)) {
    foreach ($arrIncludeJsCustom as $key => $js) {
        if ($key == $includeKey) {
            ?>
            <script type="text/javascript" src="<?php echo $root_path ?>/js/<?php echo $js ?>"></script>
            <?php
        }
    }
}
?>


