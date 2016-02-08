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

    // function costToShip ()
    // {
    //     $parcel_volume = volume()
    // }
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
            echo "<p> Weight: " .$parcel_weight. "</p>";
            echo "<p> Height: " .$parcel_height. "</p>";
            echo "<p> Width: " .$parcel_width. "</p>";
            echo "<p> Length: " .$parcel_length. "</p>";
        ?>
    </ul>
</body>
</html>
