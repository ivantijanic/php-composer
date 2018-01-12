<?php


namespace Cubes\Util;

/**
 *
 * @author backend
 */
trait EmailCapableTrait {
    //put your code here
    
    protected $email;
    
    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }


}
