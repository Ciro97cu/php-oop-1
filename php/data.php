<?php
class Movie
{
    public $title;
    public $overview;
    public $imagePath;
    public $year;

    function __construct($_title)
    {
        $this->title = $_title;
    }

    public function displayDetails($_imagePath, $_year, $_overview)
    {
        $this->imagePath = $_imagePath;
        $this->year = $_year;
        $this->overview = $_overview;
    }

    public function printFilm()
    {
        echo "<div class='col-sm-4 py-4'>";
        echo "<h2>";
        echo $this->title;
        echo "</h2>";
        echo "<div class='wrapper_img'>";
        echo "<img class='h-100' src='$this->imagePath'>";
        echo "</div>";
        echo "<p>";
        echo "Anno: " . $this->year;
        echo "</p>";
        echo "<p>";
        echo $this->overview;
        echo "</p>";
        echo "</div>";
    }
}
