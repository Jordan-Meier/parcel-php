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

    function volume()
    {
        return ($this->height * $this->width * $this->length);
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

        ?>
    </ul>
</body>
</html>
