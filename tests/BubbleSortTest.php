<?php
use PHPUnit\Framework\TestCase;

// CalculatorTest.php
include_once("src/BubbleSort.php");

class BubbleSortTest extends TestCase
{
    private $bubbleSort;
    private $array;

    protected function setUp() :void
    {

        // random array
        for($i = 0; $i < 6; $i++){
            $this->array[] = rand(0,9);
        }

        $this->bubbleSort = new BubbleSort();

       }

    protected function tearDown() :void
    {
        $this->bubbleSort = NULL;
    }

    public function testSort()
    {
        $result = $this->bubbleSort->sort($this->array);

        $this->_assertOrdered($result);
        $this->_assertEquals($this->array, $result);
    }

    private function _assertOrdered($result)
    {
        $previousElement = $result[0];
        foreach ($result as $index => $element) {
            if ($index === 0) {
                continue;
            }
            if ($element < $previousElement) {
                $this->assertEquals(true, false);
            }
            $previousElement = $element;
        }
    }

    private function _assertEquals(array $array, array $resultArray){
        if(!empty(array_diff($resultArray, $array)) || !empty(array_diff($array, $resultArray))){
            $this->assertEquals(true, false);
        }
    }
}
