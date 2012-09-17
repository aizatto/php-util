<?php

namespace Aizatto;

abstract class Enum {

  public static function getValues() {
    $class = get_called_class();
    $class = new \ReflectionClass($class);
    return $class->getConstants();
  }

  public static function getValueForName($name) {
    $values = static::getValues();
    return $values[$name];
  }

  public static function getNames() {
    $values = static::getValues();
    return array_flip($values);
  }

  public static function getNameForValue($value) {
    $values = static::getNames();
    return $values[$value];
  }

}
