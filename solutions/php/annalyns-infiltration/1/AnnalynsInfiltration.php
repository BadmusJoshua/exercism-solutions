<?php

class AnnalynsInfiltration
{
    public function canFastAttack($is_knight_awake)
    {
        //fast attack is not possible if knight is awake
        return !$is_knight_awake;
    }

    public function canSpy(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        IF (($is_knight_awake || $is_archer_awake || $is_prisoner_awake) == true){
            return true; // can spy if at least one of them is awake
        }else{
            return false; // can't spy if none of them is awake
        }
    }

    public function canSignal(
        $is_archer_awake,
        $is_prisoner_awake
    ) {
        IF((($is_archer_awake == false) && ($is_prisoner_awake == true))){
            return true; //can only signal if archer is asleep and prisoner is awake
        }ELSE{
            return false;
        }
    }

    public function canLiberate(
        $is_knight_awake,
        $is_archer_awake,
        $is_prisoner_awake,
        $is_dog_present
    ) {
        if($is_dog_present == true){
            if($is_archer_awake == false){
                return true; // can liberate if dog is present and archer is asleep
            }else{
                return false; // can't liberate if archer is awake
            }
        }else{// if dog is not present
            if($is_prisoner_awake == true){//if prisoner is awake
                                           
                  if($is_archer_awake == false){// if archer is asleep
                                                
                      if($is_knight_awake == false){//if knight is asleep
                                                    
                          return true; //dog not present, captors asleep and prisoner is awake, can liberate
                      }else{
                         return false; //dog not present, prisoner awake, archer asleep but knight awake
                      }
                  }else{
                      return false; //can't liberate if dog is present, prisoner and archer are both awake
                  }                         
            }else{//if prisoner is not awake and dog is not present as well
                return false;
            }
        }
    }
}
