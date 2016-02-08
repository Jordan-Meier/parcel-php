<?php
class Parcel
{
    private $weight;
    private $height;
    private $width;
    private $length;

    function __construct($parcel_weight, $parcel_height, $parcel_width, $parcel_length)
    {
        $this->weight = $parcel_weight;
        $this->height = $parcel_height;
        $this->width = $parcel_width;
        $this->length = $parcel_length;
    }

    function getWeight ()
    {
        return $this->weight;
    }

    function getHeight ()
    {
        return $this->height;
    }

    function getWidth ()
    {
        return $this->width;
    }

    function getLength ()
    {
        return $this->length;
    }

    function volume()
    {
        return ($this->getHeight() * $this->getWidth() * $this->getLength());
    }

    function costToShip ()
    {
        $price = 0;
        if ($this->volume() < 50 && $this->getWeight() < 20) {
            $price = $this->volume() * .3;

        } elseif ($this->volume() >= 50 && $this->getWeight() >= 20) {
            $price = $this->volume() * .7;
        }

        return $price;
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Send a parcel</title>
</head>
<body>
    <h1>Parcel site!</h1>
    <ul>
        <?php
            $parcel_weight = $_GET["weight"];
            $parcel_height = $_GET["height"];
            $parcel_width = $_GET["width"];
            $parcel_length = $_GET["length"];
            $new_parcel = new Parcel ($parcel_weight, $parcel_height, $parcel_width, $parcel_length);
            $get_volume = $new_parcel->volume();
            $get_cost = $new_parcel->costToShip();
            echo "<p> Weight: " .$parcel_weight. "</p>";
            echo "<p> Height: " .$parcel_height. "</p>";
            echo "<p> Width: " .$parcel_width. "</p>";
            echo "<p> Length: " .$parcel_length. "</p>";
            echo "<p> Volume: " .$get_volume. "</p>";
            echo "<p> Cost to Ship: " .$get_cost. "</p>";
        ?>
    </ul>
</body>
</html>
