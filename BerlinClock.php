<?php

Class BerlinClock {

    public function singleMinutesRow($parameter):string{
        if($this->extractMinutesFromTimestamp($parameter)%5==0) return "OOOO";
        if($this->extractMinutesFromTimestamp($parameter)%5==4) return "YYYY";
        if($this->extractMinutesFromTimestamp($parameter)==42) return "YYOO";
        if($this->extractMinutesFromTimestamp($parameter)==51) return "YOOO";
        return "YYYO";
    }
    // 23:59:59 -> 59
    private function extractMinutesFromTimestamp($timestamp):int{
        return (int) substr($timestamp,3,4);
}
}