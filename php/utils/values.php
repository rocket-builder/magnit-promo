<?php

  function get_int_lenght($value) {

    if(is_int($value)) {
        return $value !== 0 ? floor(log10($value) + 1) : 1;
    } else
        throw new Exception('Not Integer value.');
  }
?>
