<?php

  function get_int_lenght($value) {

    if(is_int($value)) {
        return $value !== 0 ? floor(log10($value) + 1) : 1;
    } else
        throw new Exception('Not Integer value.');
  }

  function truncate( $number, $prec)
  {
    return bccomp( $number, 0, 10 ) == 0 ? $number : round( $number - pow( 0.1, bcadd(   $prec, 1 ) ) * 5, $prec );
  }
?>
