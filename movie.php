<?php 


class Movie {

   

    public $title,$actors, $flyer , $description, $year, $rating;

    public function __construct($title, $actors, $flyer, $description)

    {
        $this->title = $title;
        $this->actors = $actors;
        $this->flyer = $flyer;
        $this->description = $description;
    }


    
    function stampData(){

        echo    '<div class= "movieCard">'.
                '<div class="img-wrapper"><img src="'.$this->flyer.'"'. '></div>' .
                '<h1>' . $this->title .'</h1>' .
                '<p>' . ' ' . '</p>' . 
                '<p>' . $this->description . '</p>'
                .'</div>';
    }


}

?>