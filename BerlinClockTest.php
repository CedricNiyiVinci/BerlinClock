<?php


use PHPUnit\Framework\TestCase;
require "BerlinClock.php";
class BerlinClockTest extends TestCase
{
    // test line of minute

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

    // given "13:35:00"
    public function testSingleMinutesRowGiven55MinutesReturnOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("13:55:00");
        //Assert
        $this ->assertEquals("OOOO" ,$actual);
    }

    // given "13:51:00"
    public function testSingleMinutesRowGiven51MinutesReturnYOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("13:51:00");
        //Assert
        $this ->assertEquals("YOOO" ,$actual);
    }

    // given "13:53:00"
    public function testSingleMinutesRowGiven53MinutesReturnYYYO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->singleMinutesRow("13:53:00");
        //Assert
        $this ->assertEquals("YYYO" ,$actual);
    }


    // test line of cinq minutes
}
