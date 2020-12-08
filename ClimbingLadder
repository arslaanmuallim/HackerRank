<?php

/*
 * Complete the 'climbingLeaderboard' function below.
 *
 * The function is expected to return an INTEGER_ARRAY.
 * The function accepts following parameters:
 *  1. INTEGER_ARRAY ranked
 *  2. INTEGER_ARRAY player
 */

function climbingLeaderboard($ranked, $player) {
    // Write your code here

 $allScores = $result = []; 
    $sameRank = null;
 
    foreach($ranked as $scored) {
        $scored = (int) $scored;

        if ($sameRank === $scored) {
            continue;
        }
        
        $allScores[] = $scored;
        $sameRank = $scored;
    }

    $right = count($allScores) - 1;
    $left = count($allScores) + 1;
    $add = false;

    for ($i = 0; $i < count($player); $i++) {
        for ($x = $right; $x >= 0; $x--) {
            if ($allScores[$x] > (int) $player[$i]) {
                $result[] = $left;
                $add = false; 
                break;
            } 
            $left--;
            $add = true;
            $right = $x - 1;
        }

        if (!$add) {
            continue;
        }
        
        $result[] = $left;
    }

    return $result; 
}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$ranked_count = intval(trim(fgets(STDIN)));

$ranked_temp = rtrim(fgets(STDIN));

$ranked = array_map('intval', preg_split('/ /', $ranked_temp, -1, PREG_SPLIT_NO_EMPTY));

$player_count = intval(trim(fgets(STDIN)));

$player_temp = rtrim(fgets(STDIN));

$player = array_map('intval', preg_split('/ /', $player_temp, -1, PREG_SPLIT_NO_EMPTY));

$result = climbingLeaderboard($ranked, $player);

fwrite($fptr, implode("\n", $result) . "\n");

fclose($fptr);
