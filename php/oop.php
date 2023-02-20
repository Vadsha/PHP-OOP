<?php
 
     interface Notification
     {
          public function sendMessage();
     }
     
     class Amazon implements Notification
     {
          public function sendMessage()
          {
               return 'Notification from Amazon';
          }
     }
     class Asia implements Notification
     {
          public function sendMessage()
          {
               return 'Notification from Asia';
          }
     }
     class BMW implements Notification
     {
          public function sendMessage()
          {
               return 'Notification from BMW';
          }
     }
     
     class Promotion
     {
          public function send($request)
          {
               
               return 'Promotion : ' . $request->sendMessage();
          }
     }

     

     $Promotion = new Promotion();
     echo $Promotion -> send(new BMW);


     




?>