<?php


use PHPUnit\Framework\TestCase;
require "BerlinClock.php";
class BerlinClockTest extends TestCase
{
    public function testSingleMinutesRowGiven0MinutesReturnOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act

        $actual = $berlinClock->singleMinutesRow();
        //Assert

        $this ->assertEquals("OOOO" ,$actual);
    }
}
