/*
Find an index of an array such that its value occurs at more than half of indices in the array.

https://codility.com/demo/take-sample-test/dominator
*/

/*
Test score
100%
100 out of 100 points
*/

function solution($A) {
    $array_count = array_count_values($A);
    arsort($array_count, SORT_NUMERIC);
    list($key, $value) = each($array_count);
    $dominator = ( $value > count($A)/2 ) ? $key : null;
    if ( is_null($dominator) ) {
        return -1;
    }
    
    foreach ( $A as $key => &$value ) {
        if ( $value == $dominator ) {
            return $key;
        }
    }
}
