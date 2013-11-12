<?php namespace Molotov\CanpostValidator;

class PostalCodeValidatorTest extends \PHPUnit_Framework_TestCase {
  private $rule;

  public function setUp() {
    $this->rule = new PostalCodeValidator();
  }

  public function testValidPostalCode() {
    $result = $this->rule->validate('canadian_postal_code', 'H2L3C2');
    $this->assertTrue($result);
  }

  public function testInvalidPostalCode() {
    $result = $this->rule->validate('canadian_postal_code', '32L3C2');
    $this->assertFalse($result);
  }

  public function testPostalCodeWithSpaceIsValid() {
    $result = $this->rule->validate('canadian_postal_code', 'H2L 3C2');
    $this->assertTrue($result);
  }

  public function testPostalCodeWithoutSpaceIsValid() {
    $result = $this->rule->validate('canadian_postal_code', 'H2L3C2');
    $this->assertTrue($result);
  }
}
