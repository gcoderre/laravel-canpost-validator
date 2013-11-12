<?php namespace Molotov\CanpostValidator;

class PostalCodeValidator {
  public function validate($attribute, $value, array $parameters = array()) {
    return (bool) preg_match('/^[ABCEGHJKLMNPRSTVXY]\d[ABCEGHJKLMNPRSTVWXYZ] ?\d[ABCEGHJKLMNPRSTVWXYZ]\d$/i', $value);
  }
}
