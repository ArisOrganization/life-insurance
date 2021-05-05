<?php

namespace project;


foreach (glob("inc/*.php") as $filename) { include $filename; }

require 'vendor/autoload.php';

ini_set('display_errors', 'On');
ini_set('memory_limit', '-1');
error_reporting(1);

$contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';
$method;
$data;
$jsonLogic = new logic();

if ($contentType === "application/json") {

    $content =  trim(file_get_contents("php://input"));
    if($jsonLogic->is_JSON($content)){
        $json= json_decode($content);
        $data = $json->data;
        $method = $json->method;
        // var_dump( $content );
    }else{
        echo "MALFORMED JSON - " . $content;
    }

}else{
    echo "CONTENT TYPE NOT `application/json` - " . $contentType;
}

switch($method){


    case "submit_form":
        session_start();
        $result_arr = array("success" => false);

        $logic = new logic();
        // echo "<pre>";
        // print_r($data);
        $logic->store_lead($data);
        $waypoint_result = $logic->write_to_waypoint($data);
        $send = array("success" => true); // $logic->send_mail($data);

        $send = $logic->send_mail($data, "lead");
        $send_thanks = $logic->send_mail($data, "thanks");

        if($send["success"]){
            $result_arr["success"] = true;
            $result_arr["waypoint_result"] = $waypoint_result;
            $_SESSION["enquiry_id"] = "true";
            $_SESSION["name"] = $data->name_1;

        }else{
            $result_arr["error"] = $send["message"];
        }

        echo json_encode($result_arr);
        break;

    default:
        echo "METHOD NOT FOUND...";
        break;
}
