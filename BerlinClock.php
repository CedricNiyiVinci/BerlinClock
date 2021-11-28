<?php

Class BerlinClock {

    public function singleMinutesRow($parameter):string{
        if($this->extractMinutesFromTimestamp($parameter)%5==0) return "OOOO";
        if($this->extractMinutesFromTimestamp($parameter)%5==4) return "YYYY";
        if($this->extractMinutesFromTimestamp($parameter)%5==2) return "YYOO";
        if($this->extractMinutesFromTimestamp($parameter)%5==1) return "YOOO";
        return "YYYO";// mod 5 equals 3
    }
    // 23:59:59 -> 59
    private function extractMinutesFromTimestamp($timestamp):int{
        return (int) substr($timestamp,3,4);
}

    public function fiveMinutesRow($parameter):string{

        if($this->extractMinutesFromTimestamp($parameter)==0 || $this->extractMinutesFromTimestamp($parameter)==4) return "OOOOOOOOOOO";
        if($this->extractMinutesFromTimestamp($parameter)==5 )return "YOOOOOOOOOO";
        if($this->extractMinutesFromTimestamp($parameter)==23 )return "YYRYOOOOOOO";

        if($this->extractMinutesFromTimestamp($parameter)==59 )return "YYRYYRYYRYY";


        return "YYRYYRYOOOO";
    }
}