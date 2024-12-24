<?php
    echo __DIR__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    function returnNameOfFunction() {
        echo __FUNCTION__;
    }
    returnNameOfFunction();
    echo "<br>";
    class TestReturnNameOfClass {
        public function returnNameOfClass() {
            echo __CLASS__;
        }
        public function returnNameOfMethod() {
            echo __METHOD__;
        }
    }
    $test = new TestReturnNameOfClass();
    $test->returnNameOfClass();
    echo "<br>";
    $test->returnNameOfMethod();
    echo "<br>";
    // namespace myArea;

    // function myValue(){
    //     return __NAMESPACE__;
    // }
    echo "<br>";
    echo PHP_VERSION;
    echo "<br>";
    echo PHP_OS;
    echo "<br>";
?>