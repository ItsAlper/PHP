<?php

$graph = [
    'A' => [0, 1, 1, 0, 1, 0],
    'B' => [1, 0, 1, 1, 0, 1],
    'C' => [1, 1, 0, 1, 0, 0],
    'D' => [0, 1, 1, 0, 0, 0],
    'E' => [1, 0, 0, 0, 0, 1],
    'F' => [0, 1, 0, 0, 1, 0],
];

function hasPathSimple($graph, $start, $end) {
    $visited = [];
    $stack = [$start];

    while (!empty($stack)) {
        $current = array_pop($stack);

        if ($current === $end) {
            return true;
        }

        if (!isset($visited[$current])) {
            $visited[$current] = true;
            $stack = array_merge($stack, $graph[$current]);
        }
    }
    return false;
}

$startNode = 'A';
$endNode = 'F';

$result = hasPathSimple($graph, $startNode, $endNode);
echo $result ? 'true' : 'false';
