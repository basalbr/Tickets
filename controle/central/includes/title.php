<?php
$titleArrayList = array(
    "central/home" => "Central do Cliente - Sistema de Tickets - Grupo R3A"
);

if (isset($includeKey) && !empty($includeKey) && in_array($includeKey, $titleArrayList)){
    echo $titleArrayList[$includeKey];
}else{
    echo "Sistema de Tickets - Grupo R3A";
}
?>
