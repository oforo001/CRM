<?php

//all functions return true if validation is correct

class Validator{

  public static function isEmpty($value){
    return trim($value) === '';
  }

  public static function isLenghtOk($value, $min=1,$max = INF){
  return strlen($value) >= $min && strlen($value) <= $max;
  }

  public static function ckeckName($value){
    return preg_match('/^[a-zA-Z]+$/', $value);
  }

  public static function isEmail($value){
    return filter_var($value, FILTER_VALIDATE_EMAIL);
  }

  public static function isDateOk($date, $format = 'Y-m-d') {
    $givenDate = DateTime::createFromFormat($format, $date);

    if (!$givenDate || $givenDate->format($format) !== $date) {
        return false;
    }

    $currentDate = new DateTime();
    $currentDate->setTime(0, 0, 0);
    return $givenDate >= $currentDate;
}

}
