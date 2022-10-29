<?php
    include 'backend/authentication.php';
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    $phoneNumber = $_POST['to'];

    if(isset($_POST['call'])){
        
        // Your Account SID and Auth Token from twilio.com/console
        $account_sid = 'AC2f27dc5404d34d8faa1ec739ff157f52';
        $auth_token = $auth;
        // In production, these should be environment variables. E.g.:
        // $auth_token = $_ENV["TWILIO_ACCOUNT_SID"]

        // A Twilio number you own with Voice capabilities
        $twilio_number = "+19294992352";

        // Where to make a voice call (your cell phone?)
        $to_number = '+1' . $phoneNumber;

        $client = new Client($account_sid, $auth_token);
        $client->account->calls->create(  
            $to_number,
            $twilio_number,
            array(
                "url" => "http://demo.twilio.com/docs/voice.xml"
            )
        );
    }
?>