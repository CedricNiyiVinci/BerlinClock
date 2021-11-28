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

    // given "00:00:00"
    public function testFiveMinutesRowGiven0MinutesReturnOOOOOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("00:00:00");
        //Assert
        $this ->assertEquals("OOOOOOOOOOO" ,$actual);
    }

    // given "23:59:00"
    public function testFiveMinutesRowGiven59MinutesReturnYYRYYRYYRYY(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("23:59:00");
        //Assert
        $this ->assertEquals("YYRYYRYYRYY" ,$actual);
    }

    // given "14:04:00"
    public function testFiveMinutesRowGiven4MinutesReturnOOOOOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:04:00");
        //Assert
        $this ->assertEquals("OOOOOOOOOOO" ,$actual);
    }

    // given "14:05:00"
    public function testFiveMinutesRowGiven5MinutesReturnYOOOOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:05:00");
        //Assert
        $this ->assertEquals("YOOOOOOOOOO" ,$actual);
    }

    // given "14:07:00"
    public function testFiveMinutesRowGiven7MinutesReturnYOOOOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:07:00");
        //Assert
        $this ->assertEquals("YOOOOOOOOOO" ,$actual);
    }

    // given "14:10:00"
    public function testFiveMinutesRowGiven10MinutesReturnYYOOOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:10:00");
        //Assert
        $this ->assertEquals("YYOOOOOOOOO" ,$actual);
    }

    // given "14:14:00"
    public function testFiveMinutesRowGiven14MinutesReturnYYOOOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:14:00");
        //Assert
        $this ->assertEquals("YYOOOOOOOOO" ,$actual);
    }

    // given "14:15:00"
    public function testFiveMinutesRowGiven15MinutesReturnYYROOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:15:00");
        //Assert
        $this ->assertEquals("YYROOOOOOOO" ,$actual);
    }

    // given "14:16:00"
    public function testFiveMinutesRowGiven16MinutesReturnYYROOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:16:00");
        //Assert
        $this ->assertEquals("YYROOOOOOOO" ,$actual);
    }

    // given "14:20:00"
    public function testFiveMinutesRowGiven20MinutesReturnYYRYOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("14:20:00");
        //Assert
        $this ->assertEquals("YYRYOOOOOOO" ,$actual);
    }

    // given "12:23:00"
    public function testFiveMinutesRowGiven23MinutesReturnYYRYOOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("12:23:00");
        //Assert
        $this ->assertEquals("YYRYOOOOOOO" ,$actual);
    }

    // given "12:25:00"
    public function testFiveMinutesRowGiven25MinutesReturnYYRYYOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("12:25:00");
        //Assert
        $this ->assertEquals("YYRYYOOOOOO" ,$actual);
    }

    // given "12:29:00"
    public function testFiveMinutesRowGiven29MinutesReturnYYRYYOOOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("12:29:00");
        //Assert
        $this ->assertEquals("YYRYYOOOOOO" ,$actual);
    }

    // given "12:30:00"
    public function testFiveMinutesRowGiven30MinutesReturnYYRYYROOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("12:30:00");
        //Assert
        $this ->assertEquals("YYRYYROOOOO" ,$actual);
    }

    // given "12:31:00"
    public function testFiveMinutesRowGiven31MinutesReturnYYRYYROOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("12:31:00");
        //Assert
        $this ->assertEquals("YYRYYROOOOO" ,$actual);
    }

    // given "17:35:00"
    public function testFiveMinutesRowGiven35MinutesReturnYYRYYRYOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("17:35:00");
        //Assert
        $this ->assertEquals("YYRYYRYOOOO" ,$actual);
    }

    // given "17:37:00"
    public function testFiveMinutesRowGiven37MinutesReturnYYRYYRYOOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("17:37:00");
        //Assert
        $this ->assertEquals("YYRYYRYOOOO" ,$actual);
    }

    // given "17:40:00"
    public function testFiveMinutesRowGiven40MinutesReturnYYRYYRYYOOO(){
        //Arrange
        $berlinClock = new BerlinClock();
        //Act
        $actual = $berlinClock->fiveMinutesRow("17:40:00");
        //Assert
        $this ->assertEquals("YYRYYRYYOOO" ,$actual);
    }

}
