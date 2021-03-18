<?php
    class Calendar{
        public function showDay($date,$month){


        $day = "2021-$month-$date";
        $unixTimestamp = strtotime($day);
        $dayOfWeek = date("l", $unixTimestamp);
        return $dayOfWeek;    
        }
        
    }