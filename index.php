<?php

class movie{
    // chiavi classe pubbliche
    public $title;
    public $subtitle;
    public $vote;
    //costruttore
    function __construct(string $_title, string $_subtitle, float $_vote )
    {
        $this->title = $_title;
        $this->subtitle = $_subtitle;
        $this->vote = $_vote;
    }
    //funzione che mi tira giu il titolazzo
    public function getFullTitle(){
        return $this->title.' - '.$this->subtitle;
    }


}


//istanze della classe movie con l'unico film importante nella storia dei film 
$LOTR_1 = new movie("Il signore degli anelli","la compagnia dell'anello",8.9);
$LOTR_2 = new movie("Il signore degli anelli","Le due torri",8.8);
$LOTR_3 = new movie("Il signore degli anelli","Il ritorno del re",9);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
</head>
<body>
    

        <ul>
            <li>

                <span>
                <?php
                    echo $LOTR_1->getFullTitle();
                 ?>
                </span>

                <span>
                <?php
                    echo $LOTR_1->vote;
                 ?>
                </span>

            </li>

            <br>

             <li>

                <span>
                <?php
                    echo $LOTR_2->getFullTitle();
                 ?>
                </span>

                <span>
                <?php
                    echo $LOTR_2->vote;
                 ?>
                </span>

            </li>

            <br>

             <li>

                <span>
                <?php
                    echo $LOTR_3->getFullTitle();
                 ?>
                </span>

                <span>
                <?php
                    echo $LOTR_3->vote;
                 ?>
                </span>

            </li>

            <br>
        </ul>


</body>
</html>