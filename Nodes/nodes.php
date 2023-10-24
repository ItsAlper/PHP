<?php

$graph = [
    'A' => ['B', 'C'],
    'B' => ['A', 'C', 'D'],
    'C' => ['A', 'B', 'D', 'E'],
    'D' => ['B', 'C', 'E', 'F'],
    'E' => ['C', 'D', 'F', 'G'],
    'F' => ['D', 'E', 'G', 'H'],
    'G' => ['E', 'F', 'H'],
    'H' => ['F', 'G', 'I'],
    'I' => ['H'],
];

function nodeWay($graph, $start, $end) {
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

$result = nodeWay($graph, $startNode, $endNode);
echo $result ? 'true' : 'false';
