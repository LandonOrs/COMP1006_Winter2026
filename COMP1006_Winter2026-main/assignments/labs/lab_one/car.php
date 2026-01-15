<?php
 // create class "car"
 class car {
    public function __construct(public string $make = "BMW", 
                                public string $model = "M8", 
                                public int $year = 2023)
    {
    }

    public function getBadge() : string { 
        return "<h2> This is a car </h2>";
    }

    public function getCarInfo() : string {
        return "<p> Car Make: " . $this->make . ", Model: " . $this->model . ", Year: " . $this->year . "</p>";
    }

 }
?>