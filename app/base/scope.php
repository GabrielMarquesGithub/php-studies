<?php

// Global variable
$globalVar = "I am a global variable";

function testScope() {
    // Local variable
    $localVar = "I am a local variable";

    echo $localVar . "<br>"; // Output: I am a local variable
    echo $globalVar ? $globalVar . "<br>" : null; // Error: Undefined variable

    global $globalVar;

    echo $globalVar . " inside a function" . "<br>"; // Output: I am a global variable
}

testScope();
echo $globalVar; // Output: I am a global variable

?>
