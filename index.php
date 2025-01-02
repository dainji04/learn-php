<?php
class Car
{
    private $model;
    private $engine;
    private $weight;

    public function __construct($model, $engine, $weight = 'n/a')
    {
        $this->model = $model;
        $this->engine = $engine;
        $this->weight = $weight;
    }
    public function __Echo()
    {
        echo $this->model . ':' . PHP_EOL;
        echo '  ' . $this->engine . PHP_EOL;
        echo '  Weight: ' . $this->weight . PHP_EOL;
    }
}
echo "<pre>";
$lamborini = new Car('Lamborini', 'V12', '1500');
$lamborini->__Echo();
