<?php

    interface Notification
    {
        public function send();
    }

    class samsung implements Notification
    {
        public function send()
        {
            return "This is samsung";
        }
    }
    class sony implements Notification
    {
        public function send()
        {
            return "This is sony";
        }
    }
    class lenovo implements Notification
    {
        public function send()
        {
            return "This is lenovo";
        }
    }

    class Discount
    {
        public function message(Notification $req)
        {
            return $req->send();
        }
    }

    $discount = new discount();
    echo $discount->message(new samsung);
?>