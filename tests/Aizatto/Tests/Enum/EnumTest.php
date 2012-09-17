<?php

namespace Aizatto\Tests\Enum;

class EnumTest extends \Aizatto\Tests\AizattoTestCase {

  public function testGetValues() {
    $values = array(
      'FIRST' => 1,
      'SECOND' => 2,
      'THIRD' => 3,
    );

    $actual = TestEnum::getValues();
    foreach ($values as $index => $expected) {
      $this->assertEquals($expected, $actual[$index]);
    }
  }

  public function testGetValueForName() {
    $actual = TestEnum::getValueForName('FIRST');
    $this->assertEquals(TestEnum::FIRST, $actual);
  }

  public function testGetNames() {
    $values = array(
      1 => 'FIRST',
      2 => 'SECOND',
      3 => 'THIRD',
    );

    $actual = TestEnum::getNames();
    foreach ($values as $index => $expected) {
      $this->assertEquals($expected, $actual[$index]);
    }
  }

  public function testGetNameForValue() {
    $actual = TestEnum::getNameForValue(TestEnum::FIRST);
    $this->assertEquals('FIRST', $actual);
  }

}
