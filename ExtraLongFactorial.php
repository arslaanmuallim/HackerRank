<?php

// Complete the extraLongFactorials function below.
function extraLongFactorials($n) {
$factorialValue =  gmp_fact($n);
echo gmp_strval($factorialValue);
}

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

print(extraLongFactorials($n));

fclose($stdin);
