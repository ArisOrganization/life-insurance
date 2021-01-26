<?php
namespace project;

use Mailgun\Mailgun;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require __DIR__ . '/../php_mailer/Exception.php';
require __DIR__ . '/../php_mailer/PHPMailer.php';
require __DIR__ . '/../php_mailer/SMTP.php';
 
ini_set('error_reporting', E_ALL); // or error_reporting(E_ALL);
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');

class logic {

    function encrypt_array($array_to_encode){
        $openSSL = new Encryption();
        $securityObject = $array_to_encode;
        $securityString =  $openSSL->encode(json_encode($securityObject));
        return $securityString;
    }

    function decrypt_array($array_to_decode){
        $openSSL = new Encryption();
        $decodedString =  $openSSL->decode($array_to_decode);
        $securityObject = json_decode($decodedString);
        return $securityObject;
    }

    function is_JSON($args) {
        json_decode($args);
        return (json_last_error()===JSON_ERROR_NONE);
    }
 
    function write_to_waypoint($data){

        $param_string = "";
        foreach($data as $key => $value){
            // echo "key: " . $key . " - value: " . $value;
            $param = $key;
            // if($key == "name"){
            //     $param = "fullname";
            // }
            $param_string = $param_string . "&".$param ."=". $value;
        }
 
        $ch = curl_init();  
        $url = "https://opop.waypointsoftware.io/capture.php?xAuthentication=9f37495ae5b8ba588c4ef2766f91d32a" . $param_string; 
        curl_setopt($ch, CURLOPT_URL, $url);  
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 

		// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $waypoint_response = curl_exec($ch);
        curl_close($ch);  
        
        return $waypoint_response;  
        die();
    }  

    function store_lead($data){

        $date = date("d-m-Y H:i A");
        $unix_date = time();
        $ip= $_SERVER['REMOTE_ADDR'];

        $db = new db;
        $stmt = $db->db->prepare("INSERT INTO  leads (
                                                        name_1, 
                                                        name_2, 
                                                        dob_1, 
                                                        dob_2, 
                                                        email, 
                                                        telephone,  
                                                        cover_group, 
                                                        cover_value, 
                                                        cover_length,  
                                                        readable_date, 
                                                        unix_date, 
                                                        ip  
                                                    )VALUES(
                                                        :name_1, 
                                                        :name_2, 
                                                        :dob_1, 
                                                        :dob_2, 
                                                        :email, 
                                                        :telephone,  
                                                        :cover_group, 
                                                        :cover_length, 
                                                        :cover_value,  
                                                        :readable_date, 
                                                        :unix_date, 
                                                        :ip  
                                                    )");
        $stmt->bindValue(":name_1", $data->name_1);
        $stmt->bindValue(":dob_1", $data->dob_1);
        $stmt->bindValue(":name_2", $data->name_2);
        $stmt->bindValue(":dob_2", $data->dob_2);

        $stmt->bindValue(":email", $data->email); 
        $stmt->bindValue(":telephone", $data->telephone);   

        $stmt->bindValue(":cover_group", $data->cover_group);   
        $stmt->bindValue(":cover_length", $data->cover_length);   
        $stmt->bindValue(":cover_value", $data->cover_value);  

        $stmt->bindValue(":readable_date", $date);  
        $stmt->bindValue(":unix_date", $unix_date);  
        $stmt->bindValue(":ip", $ip);  
         
        $checkResult = $stmt->execute();
        $lastid = $db->getLast();
        if($checkResult){  
            $db = null;
            return $lastid ;
        }else{            
            $db = null;
            return false;
        } 
    } 

    function send_mail($data, $type){



        $fromEmail =    'no_reply@here-4-life.co.uk';
        $from =         'Here4Life Team'; 

        $message =  "";
        if($type == "lead"){
            $subject = "New Here4life quote enquiry"; 
            $message =     "New Quote Request: " .  
                            "<br />".  
                            "<br />".
                            "Name 1: " .$data->name_1 . 
                            "<br />".  
                            "<br />".
                            "D.O.B. 1: " .$data->dob_1 .

                            "<br />".  
                            "<br />".
                            "Name 2: " .$data->name_2 . 
                            "<br />".  
                            "<br />".
                            "D.O.B. 2: " .$data->dob_2 .

                            "<br />".  
                            "<br />".
                            "Cover group: " .$data->cover_group . 
                            "<br />".  
                            "<br />".
                            "Cover value: " .$data->cover_value .
                            "<br />".  
                            "<br />".
                            "Cover length: " .$data->cover_length . 
                            "<br />".  
                            "<br />".
                            "Email: " .$data->email.
                            "<br />".  
                            "<br />".
                            "Telephone: " .$data->telephone;

            $sendToEmail = 'jake.quinn@here4life.co.uk';
            $ccEmail_a =  'grant@here4life.co.uk';
            $ccEmail_b =  'scott@claims2gain.com';
 
            // $sendToEmail = 'jay.exton@live.co.uk';
            // $ccEmail_a =  'james@opopmedia.co.uk';
            // $ccEmail_b =  'info@opopmedia.co.uk';
            $sendTo = "Here4Life";

            $recipients = array( $sendToEmail, $ccEmail_a, $ccEmail_b);



        }else{
            $subject = "Thank you for your recent Here4Life insurance quote enquiry";
            $message =  "Dear " . $data->name_1  . ",".
                        "<br />".  
                        "<br />".
                        "Thank you for your enquiry, our team at Here4Life will be in touch as soon as possible to discuss your requirements. " .
                        
                        "<br />".  
                        "<br />".
                        "Kind Regards" . 
                        "<br />".
                        "Here4Life Team";


            $sendTo =       $data->name_1;
            $sendToEmail =  $data->email; 


            $recipients = array( $sendToEmail);
 
        }



        $params = array(
            'from'	=> $from . ' <'. $fromEmail .'>',
            'to'	=> $recipients,  
             //$sendTo .' <'.  $sendToEmail .'>', 
            // 'to'	=> $sendTo .' <james@opopmedia.co.uk>',
            'subject' => $subject,
            'text' => $message,
            'html' => $message 
        );
  
        # Instantiate the client.
        $mgClient = Mailgun::create('d0dc5cf878157ad82f061ec29818e71a', 'https://api.eu.mailgun.net/v3');
        $domain = "mailer.here-4-life.co.uk";
        

        # Make the call to the client. 
        $res = $mgClient->messages()->send($domain, $params);  
        if($res->getMessage() == "Queued. Thank you."){ 
            return  array('success' => true, 'message' =>  "Message Sent");
        }else{
            return array('type' => 'false', 'message' =>  "Message error");
        }

 
    }

    function send_smtp_mail($email, $msg){



        $fromEmail =    '';
        $from =         '';
        $sendToEmail =  "";
        // $sendToEmail =  'jay.exton@live.co.uk';
        $sendTo =       "";
        $subject =      '';

        $mail = new PHPMailer(true);
        // Server settings
        // $mail->SMTPDebug = 3;                                    // Enable verbose debug output
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       =  '';                                    //'SMTP.LIVEMAIL.CO.UK'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = '';                                     // SMTP username
        $mail->Password   = '';                                     // SMTP password
        $mail->SMTPSecure = "ssl";                                  // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 465;                                    // TCP port to connect to


        $mail->setFrom($fromEmail, $from);
        $mail->addAddress($sendToEmail , $sendTo );
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    =   "";
        $mail->AltBody =  "test"; //$this->get_dispatch_email ;


        if($mail->send()){
            return  array('type' => 'success', 'message' =>  "Message Sent");
        }else{
            return array('type' => 'false', 'message' =>  "Message error");
        }
    }

    function get_confirm_email($customer, $payment, $order){
        $email_head = "<head> <meta name='viewport' content='width=device-width' /> <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' /><title>Simple Transactional Email</title>   ". $this->get_base_style() ." </head>";

        $email_body = "
        <body class=''>
                <span class='preheader'>order has been received.</span>
                <div class='body'>
					<div class='container'>
	                    <div class='content'>

	                        <!-- START CENTERED WHITE CONTAINER -->
	                        <div role='presentation' class='main'>
		                        <!-- START MAIN CONTENT AREA -->
	                            <div class='wrapper'>
	                                <div >
	                                    <p>Hi " .  $customer["first_name"] . " " . $customer["last_name"]  . ",</p>
	                                    <p>We would like to confirm we have received your recent order, please see your order information below</p>

	                                    <p>Regards,</p>
	                                    <p>our team</p>

	                                    <!-- END MAIN CONTENT AREA -->
									</div>
		                            <!-- END CENTERED WHITE CONTAINER -->
	                			</div>
                			</div>
	                                <!-- START FOOTER -->
                        <div class='footer'>  </div>
                        <!-- END FOOTER -->
                    </div>
                </div>
            </body>
        ";




        return " <!doctype html><html>" . $email_head . $email_body . "</html>";
    }

    function get_base_style(){
        $style = " <style>
        /* -------------------------------------
            GLOBAL RESETS
        ------------------------------------- */

        /*All the styling goes here*/

        img {
            border: none;
            -ms-interpolation-mode: bicubic;
            max-width: 100%;
        }

        body {
            background-color: #f6f6f6;
            font-family: sans-serif;
            -webkit-font-smoothing: antialiased;
            font-size: 14px;
            line-height: 1.4;
            margin: 0;
            padding: 0;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        table {
            border-collapse: separate;
            mso-table-lspace: 0pt;
            mso-table-rspace: 0pt;
            width: 100%; }
            table td {
            font-family: sans-serif;
            font-size: 14px;
            vertical-align: top;
        }

        /* -------------------------------------
            BODY & CONTAINER
        ------------------------------------- */

        .body {
            background-color: #f6f6f6;
            width: 100%;
        }

        /* Set a max-width, and make it display as block so it will automatically stretch to that width, but will also shrink down on a phone or something */
        .container {
            display: block;
            margin: 0 auto !important;
            /* makes it centered */
            max-width: 580px;
            padding: 10px;
            width: 580px;
        }

        /* This should also be a block element, so that it will fill 100% of the .container */
        .content {
            box-sizing: border-box;
            display: block;
            margin: 0 auto;
            max-width: 580px;
            padding: 10px;
        }

        /* -------------------------------------
            HEADER, FOOTER, MAIN
        ------------------------------------- */
        .main {
            background: #ffffff;
            border-radius: 3px;
            width: 100%;
        }

        .wrapper {
            box-sizing: border-box;
            padding: 20px;
        }

        .content-block {
            padding-bottom: 10px;
            padding-top: 10px;
        }

        .footer {
            clear: both;
            margin-top: 10px;
            text-align: center;
            width: 100%;
        }
            .footer td,
            .footer p,
            .footer span,
            .footer a {
            color: #999999;
            font-size: 12px;
            text-align: center;
        }

        /* -------------------------------------
            TYPOGRAPHY
        ------------------------------------- */
        h1,
        h2,
        h3,
        h4 {
            color: #000000;
            font-family: sans-serif;
            font-weight: 400;
            line-height: 1.4;
            margin: 0;
            margin-bottom: 30px;
        }

        h1 {
            font-size: 35px;
            font-weight: 300;
            text-align: center;
            text-transform: capitalize;
        }

        p,
        ul,
        ol {
            font-family: sans-serif;
            font-size: 14px;
            font-weight: normal;
            margin: 0;
            margin-bottom: 15px;
        }
            p li,
            ul li,
            ol li {
            list-style-position: inside;
            margin-left: 5px;
        }

        a {
            color: #3498db;
            text-decoration: underline;
        }

        /* -------------------------------------
            BUTTONS
        ------------------------------------- */
        .btn {
            box-sizing: border-box;
            width: 100%; }
            .btn > tbody > tr > td {
            padding-bottom: 15px; }
            .btn table {
            width: auto;
        }
            .btn table td {
            background-color: #ffffff;
            border-radius: 5px;
            text-align: center;
        }
            .btn a {
            background-color: #ffffff;
            border: solid 1px #3498db;
            border-radius: 5px;
            box-sizing: border-box;
            color: #3498db;
            cursor: pointer;
            display: inline-block;
            font-size: 14px;
            font-weight: bold;
            margin: 0;
            padding: 12px 25px;
            text-decoration: none;
            text-transform: capitalize;
        }

        .btn-primary table td {
            background-color: #3498db;
        }

        .btn-primary a {
            background-color: #3498db;
            border-color: #3498db;
            color: #ffffff;
        }

        /* -------------------------------------
            OTHER STYLES THAT MIGHT BE USEFUL
        ------------------------------------- */
        .last {
            margin-bottom: 0;
        }

        .first {
            margin-top: 0;
        }

        .align-center {
            text-align: center;
        }

        .align-right {
            text-align: right;
        }

        .align-left {
            text-align: left;
        }

        .clear {
            clear: both;
        }

        .mt0 {
            margin-top: 0;
        }

        .mb0 {
            margin-bottom: 0;
        }

        .preheader {
            color: transparent;
            display: none;
            height: 0;
            max-height: 0;
            max-width: 0;
            opacity: 0;
            overflow: hidden;
            mso-hide: all;
            visibility: hidden;
            width: 0;
        }

        .powered-by a {
            text-decoration: none;
        }

        hr {
            border: 0;
            border-bottom: 1px solid #f6f6f6;
            margin: 20px 0;
        }

        /* -------------------------------------
            RESPONSIVE AND MOBILE FRIENDLY STYLES
        ------------------------------------- */
        @media only screen and (max-width: 620px) {
            table[class=body] h1 {
            font-size: 28px !important;
            margin-bottom: 10px !important;
            }
            table[class=body] p,
            table[class=body] ul,
            table[class=body] ol,
            table[class=body] td,
            table[class=body] span,
            table[class=body] a {
            font-size: 16px !important;
            }
            table[class=body] .wrapper,
            table[class=body] .article {
            padding: 10px !important;
            }
            table[class=body] .content {
            padding: 0 !important;
            }
            table[class=body] .container {
            padding: 0 !important;
            width: 100% !important;
            }
            table[class=body] .main {
            border-left-width: 0 !important;
            border-radius: 0 !important;
            border-right-width: 0 !important;
            }
            table[class=body] .btn table {
            width: 100% !important;
            }
            table[class=body] .btn a {
            width: 100% !important;
            }
            table[class=body] .img-responsive {
            height: auto !important;
            max-width: 100% !important;
            width: auto !important;
            }
        }

        /* -------------------------------------
            PRESERVE THESE STYLES IN THE HEAD
        ------------------------------------- */
        @media all {
            .ExternalClass {
            width: 100%;
            }
            .ExternalClass,
            .ExternalClass p,
            .ExternalClass span,
            .ExternalClass font,
            .ExternalClass td,
            .ExternalClass div {
            line-height: 100%;
            }
            .apple-link a {
            color: inherit !important;
            font-family: inherit !important;
            font-size: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
            text-decoration: none !important;
            }
            #MessageViewBody a {
            color: inherit;
            text-decoration: none;
            font-size: inherit;
            font-family: inherit;
            font-weight: inherit;
            line-height: inherit;
            }
            .btn-primary table td:hover {
            background-color: #34495e !important;
            }
            .btn-primary a:hover {
            background-color: #34495e !important;
            border-color: #34495e !important;
            }
        }

        </style>";
        return $style;
    }  
}
