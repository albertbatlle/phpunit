<?php
  require_once "Arrays.php";
  use PHPUnit\Framework\TestCases;

  class ArraysTest extends PHPUnit_Framework_TestCase{
    public function testExtraerNumerosArrayEnteros(){
      $a = [1,2,"hola",3];
      $r = extraerNumerosArray($a);
      $this->assertEquals([1,2,3], $r);
    }

    public function testExtraerNumerosArrayNada(){
      $a = ["hola", false];
      $r = extraerNumerosArray($a);
      $this->assertEmpty($r);
    }

    public function testExtraerNumerosArrayFloats(){
      $a = ["hola", false,3.4];
      $r = extraerNumerosArray($a);
      $this->assertEquals([3.4],$r);
    }

    public function testExtraerNumerosArrayCadena(){
      $a = ["hola", false,3.4, 5,"6"];
      $r = extraerNumerosArray($a);
      $this->assertEquals([3.4, 5],$r);
    }

  }
?>
