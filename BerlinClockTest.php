<?php


use PHPUnit\Framework\TestCase;
require "BerlinClock.php";
class BerlinClockTest extends TestCase
{
    // given "00:00:00"
    public function testSingleMinutesRowGiven0MinutesReturnOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("00:00:00");
        //Assert
        $this ->assertEquals("OOOO" ,$actual);
    }

    // given "23:59:59"
    public function testSingleMinutesRowGiven59MinutesReturnYYYY(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("23:59:59");
        //Assert
        $this ->assertEquals("YYYY" ,$actual);
    }

    // given "23:42:00"
    public function testSingleMinutesRowGiven42MinutesReturnYYOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("23:42:00");
        //Assert
        $this ->assertEquals("YYOO" ,$actual);
    }

    // given "13:54:00"
    public function testSingleMinutesRowGiven54MinutesReturnYYYY(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("13:54:00");
        //Assert
        $this ->assertEquals("YYYY" ,$actual);
    }
}
