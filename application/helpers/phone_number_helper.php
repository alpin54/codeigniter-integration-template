<?php
if (!function_exists('phone_number')) {
  function phone_number($phone)
  {
    return preg_replace('/(\b(-){1,2}\b)/', '', preg_replace('/[\s_]+/', '', $phone));
  }
}
