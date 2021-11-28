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
        return (int) substr($timestamp,3,2);
    }

    public function fiveMinutesRow($parameter):string{
        $parameterInt = $this->extractMinutesFromTimestamp($parameter);
        return $this->strictlyLessThan20Minutes($parameterInt).$this->between20and34Minutes($parameterInt).
            $this->between35and49Minutes($parameterInt).$this->between50and59Minutes($parameterInt);
    }

    private function strictlyLessThan20Minutes($parameter):string{
        if($parameter>=0 && $parameter<5)
            return "OOO";
        if($parameter>=5 && $parameter<10)
            return "YOO";
        if($parameter>=10 && $parameter<15)
            return "YYO";
        return "YYR";
    }

    private function between20and34Minutes($parameter):string{
        if ($parameter<20) return "OOO";
        if($parameter>=20 && $parameter<25)
            return "YOO";
        if($parameter>=25 && $parameter<30)
            return "YYO";
        return "YYR";
    }

    private function between35and49Minutes($parameter):string{
        if ($parameter<35) return "OOO";
        if($parameter>=35 && $parameter<40)
            return "YOO";
        if($parameter>=40 && $parameter<45)
            return "YYO";
        return "YYR";
    }

    private function between50and59Minutes($parameter):string{
        if ($parameter<50) return "OO";
        if($parameter>=50 && $parameter<55)
            return "YO";
        return "YY";
    }

    public function singleHoursRow($parameter):string{
        if($this->extractHoursFromTimestamp($parameter)%5==0) return "OOOO";
        if($this->extractHoursFromTimestamp($parameter)%5==4) return "RRRR";
        if($this->extractHoursFromTimestamp($parameter)%5==2) return "RROO";
        if($this->extractHoursFromTimestamp($parameter)%5==1) return "ROOO";
        return "RRRO";// mod 5 equals 3
    }

    // 23:59:59 -> 23
    private function extractHoursFromTimestamp($timestamp):int
    {
        return (int)substr($timestamp, 0, 2);
    }

    public function fiveHoursRow($parameter):string{
        if($this->extractHoursFromTimestamp($parameter)<5) return "OOOO";
        if($this->extractHoursFromTimestamp($parameter)<10) return "ROOO";
        if($this->extractHoursFromTimestamp($parameter)<15) return "RROO";
        if($this->extractHoursFromTimestamp($parameter)<20) return "RRRO";
        return "RRRR";
    }

    // 23:59:45 -> 45
    private function extractSecondsFromTimestamp($timestamp):int{
        return (int) substr($timestamp,6,2);
    }


    public function secondsLamp($parameter):string{
        if($this->extractSecondsFromTimestamp($parameter)%2==0) return "Y";
        return "O";
    }

    public function entireBerlinClock(string $string)
    {
        return "YOOOOOOOOOOOOOOOOOOOOOOO";
    }
}