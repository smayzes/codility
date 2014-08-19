/*
CountFactors - Count factors of given number n.

https://codility.com/demo/take-sample-test/count_factors
*/

/*
Test score
57%
57 out of 100 points
*/

function solution($N) {
    $count = 0;
    for ( $i = 1; $i <= $N; $i ++ ) {
        if ( $N  % $i === 0 ) {
            $count++;  
        }
    }
    return $count;
}
