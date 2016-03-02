<?php

$a = 4;
$b = 20;


function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b;
    } else {
        return "ERROR: Both arguments must be numbers. \$a was {$a} and \$b was {$b}" . PHP_EOL;
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b;
    } else {
        return "ERROR: Both arguments must be numbers. \$a was {$a} and \$b was {$b}" . PHP_EOL;
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b;
    } else {
        return "ERROR: Both arguments must be numbers. \$a was {$a} and \$b was {$b}" . PHP_EOL;
    }
}

function divide($a, $b) {
    
    $message = '';
    
    if (is_numeric($a) && is_numeric($b)) {
        if ($b == 0){
        	
        	return "Cannot divide by zero. \$a was {$a} and \$b was {$b}." . PHP_EOL;
        }
		
		return $a / $b;
    
    } else {
        
        return "ERROR: Both arguments must be numbers. \$a was {$a} and \$b was {$b}.\n" . PHP_EOL;
    
    }
}

function modulus($a, $b) {
    
    $message = '';
    
    if (is_numeric($a) && is_numeric($b)) {
        if ($b == 0){
        	
        	return "Cannot divide by zero. \$a was {$a} and \$b was {$b}." . PHP_EOL;
        }
		
		return $a % $b;
    
    } else {
        
        return "ERROR: Both arguments must be numbers. \$a was {$a} and \$b was {$b}." . PHP_EOL;
    
    }
}

echo add(2,2) . PHP_EOL;
echo subtract(2,2) . PHP_EOL;
echo multiply(2,2) . PHP_EOL;
echo divide(2,0) . PHP_EOL;
echo modulus(2,0) . PHP_EOL;
