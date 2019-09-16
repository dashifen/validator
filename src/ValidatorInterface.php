<?php

namespace Dashifen\Validator;

interface ValidatorInterface {
  /**
   * canValidate
   *
   * Returns true if this object can validate data identified by the field
   * label.
   *
   * @param string $field
   *
   * @return bool
   */
  public function canValidate (string $field): bool;

  /**
   * isValid
   *
   * Returns true if our value is valid based on the a test dependent on the
   * value's field label.
   *
   * @param string $field
   * @param mixed  $value
   *
   * @return bool
   */
  public function isValid (string $field, $value): bool;

  /**
   * isValidArray
   *
   * Returns true if each value within the array is valid based on the a
   * test dependent on the value's field label.
   *
   * @param string $field
   * @param array  $values
   * @param array  $parameters
   *
   * @return bool
   */
  public function isValidArray(string $field, array $values, ...$parameters): bool;
}