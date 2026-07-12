<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
       return $is_knight_awake != true;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_knight_awake || $is_archer_awake || $is_prisoner_awake != false;
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        return $is_archer_awake != true && $is_prisoner_awake != false;
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if((!$is_archer_awake) && ($is_dog_present  || ($is_prisoner_awake && !$is_knight_awake)))
        {
           return true;
        }
    }
}
