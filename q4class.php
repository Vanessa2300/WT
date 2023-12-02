<?php
class Computer {
    protected $brand;
    protected $model;
    protected $processor;

    public function __construct($brand, $model, $processor) {
        $this->brand = $brand;
        $this->model = $model;
        $this->processor = $processor;
    }

    public function display() {
        echo "<h3>Computer Details</h3>";
        echo "Brand: " . $this->brand . "<br>";
        echo "Model: " . $this->model . "<br>";
        echo "Processor: " . $this->processor . "<br>";
    }
}

class Desktop extends Computer {
    protected $keyboard;
    protected $monitor;
    protected $mouse;

    public function __construct($brand, $model, $processor, $keyboard, $monitor, $mouse) {
        parent::__construct($brand, $model, $processor);
        $this->keyboard = $keyboard;
        $this->monitor = $monitor;
        $this->mouse = $mouse;
    }

    public function display() {
        parent::display();
        echo "<h4>Desktop Details</h4>";
        echo "Additional info 1: " . $this->keyboard . "<br>";
        echo "Additional info 2: " . $this->monitor . "<br>";
        echo "Additional info 3: " . $this->mouse . "<br>";
    }
}

class Laptop extends Computer {
    protected $displaySize;
    protected $batteryLife;
    protected $weight;

    public function __construct($brand, $model, $processor, $displaySize, $batteryLife, $weight) {
        parent::__construct($brand, $model, $processor);
        $this->displaySize = $displaySize;
        $this->batteryLife = $batteryLife;
        $this->weight = $weight;
    }

    public function display() {
        parent::display();
        echo "<h4>Laptop Details</h4>";
        echo "Additional info 1: " . $this->displaySize . "<br>";
        echo "Additional info 2: " . $this->batteryLife . "<br>";
        echo "Additional info 3: " . $this->weight . "<br>";
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $processor = $_POST['processor'];
    $type = $_POST['type'];
    $additional1 = $_POST['additional1'];
    $additional2 = $_POST['additional2'];
    $additional3 = $_POST['additional3'];

    if ($type === 'Desktop') {
        $desktop = new Desktop($brand, $model, $processor, $additional1, $additional2, $additional3);
        $desktop->display();
    } elseif ($type === 'Laptop') {
        $laptop = new Laptop($brand, $model, $processor, $additional1, $additional2, $additional3);
        $laptop->display();
    }
}
?>
