<?php
    //required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Access-Control-Allow-Methods: POST");
    header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


     $data = $_POST['callerid'];

     $write = fopen("calllog.txt", "w") or die("unable to open file");
     fwrite($write, $data);

     echo $data;

?>