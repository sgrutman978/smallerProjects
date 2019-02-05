<?php

curl -H "Content-type: application/json" -H "Authorization:key=AAAA6z_Aucc:APA91bFJKKWMEx8Vl3FQVHvwusHpKf0LjPtyHplwGGoECTT_Fy-hk0jAsJ4Z1edwMqfyfiJSadv44J_cboSbzicxdIcLVOpoqDZkcS5nDjDcos3GMDvJroov5fnQXWJpJLB03thZy7qE"  -X POST -d '{ "data": { "score": "5x1","time": "15:10"},"to" : "fSUM_XvqZnE:APA91bFKEVQriPLqgH8M6--5OqpI8z3OvAhKaaH3ofRh2f3jAvqYy148qqPK4H9hj_r-1HSYAsU4bLQuYrQ3MyIs4SptZ0vpMLw5-hMIpn6hi1O-oJSMjXwuRxwPoYIAHv3n9OF8T3nf"}' https://fcm.googleapis.com/fcm/send




// // create a new cURL resource
// $ch = curl_init();

// // set URL and other appropriate options
// curl_setopt($ch, CURLOPT_URL, "http://www.example.com/");
// curl_setopt($ch, CURLOPT_HEADER, 0);

// // grab URL and pass it to the browser
// curl_exec($ch);

// // close cURL resource, and free up system resources


// curl -X POST --header "Authorization: key=AAAA6z_Aucc:APA91bFJKKWMEx8Vl3FQVHvwusHpKf0LjPtyHplwGGoECTT_Fy-hk0jAsJ4Z1edwMqfyfiJSadv44J_cboSbzicxdIcLVOpoqDZkcS5nDjDcos3GMDvJroov5fnQXWJpJLB03thZy7qE" \
//     --Header "Content-Type: application/json" \
//     https://fcm.googleapis.com/fcm/send \
//     -d "{\"to\":\"fSUM_XvqZnE:APA91bFKEVQriPLqgH8M6--5OqpI8z3OvAhKaaH3ofRh2f3jAvqYy148qqPK4H9hj_r-1HSYAsU4bLQuYrQ3MyIs4SptZ0vpMLw5-hMIpn6hi1O-oJSMjXwuRxwPoYIAHv3n9OF8T3nf\",\"notification\":{\"body\":\"Yellow\"},\"priority\":10}"

//     curl_close($ch);






// $id = "fSUM_XvqZnE:APA91bFKEVQriPLqgH8M6--5OqpI8z3OvAhKaaH3ofRh2f3jAvqYy148qqPK4H9hj_r-1HSYAsU4bLQuYrQ3MyIs4SptZ0vpMLw5-hMIpn6hi1O-oJSMjXwuRxwPoYIAHv3n9OF8T3nf"

// $message = "yyoyo"

// $url = 'https://fcm.googleapis.com/fcm/send';

//     $fields = array (
//             'registration_ids' => array (
//                     $id
//             ),
//             'data' => array (
//                     "message" => $message
//             )
//     );
//     $fields = json_encode ( $fields );

//     $headers = array (
//             'Authorization: key=' . "AIzaSyDvtxW59K7RtkDwkKqi5-aUGPwjAj5REfo",
//             'Content-Type: application/json'
//     );

//     $ch = curl_init ();
//     curl_setopt ( $ch, CURLOPT_URL, $url );
//     curl_setopt ( $ch, CURLOPT_POST, true );
//     curl_setopt ( $ch, CURLOPT_HTTPHEADER, $headers );
//     curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
//     curl_setopt ( $ch, CURLOPT_POSTFIELDS, $fields );

//     $result = curl_exec ( $ch );
//     echo $result;
//     curl_close ( $ch );

    ?>