<?php
function get_file($name){
    include $_SERVER['DOCUMENT_ROOT']."/movieclub/htdocs/lib/template/_$name.php";
}
global $conf;
$conf=file_get_contents($_SERVER['DOCUMENT_ROOT']."/movieclub/project/movieclubconfic.json");
function get_conf($name){
    global $conf;
    $data=json_decode($conf,true);
    if(isset($data[$name])){
        return $data[$name];
    }

}