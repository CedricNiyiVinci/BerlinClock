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
}
