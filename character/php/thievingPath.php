<?php
/*Thieving Path*/

function thievingPath($choice)
{
    if($choice == "0")
    {
        return 'Path of the Swindler';
    }

    if($choice == "1")
    {
        return 'Path of the Assassin';
    }

    if($choice == "2")
    {
        return 'Path of the Boss';
    }
}

function getAlignment($choice)
{
    if($choice == "0")
    {
        return 'Neutral';
    }

    if($choice == "1")
    {
        return 'Chaotic';
    }

    if($choice == "2")
    {
        return 'Lawful';
    }
}


?>