<?php


    function sendNotification($tokens, $message, $type){
      $url = "https://fcm.googleapis.com/fcm/send";
      $fields = array(
        'registration_ids' => $tokens,
        $type => $message,
        'priority' => 'high',
        'content_available' => true, );

      $headers = array(
  			'Authorization:key = AIzaSyCP6sP-BhfEgXrQoNGxBWJW_EKxc6gD0ro ',
  			'Content-Type: application/json'
			);


	   $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, true);
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
     curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);
     curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
     $result = curl_exec($ch);
      if($result === FALSE){
        die('Curl failed ' . curl_error($ch));
      }


     curl_close($ch);

      return $result;

    }


 ?>
