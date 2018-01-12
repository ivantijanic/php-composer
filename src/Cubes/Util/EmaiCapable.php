<?php

namespace Cubes\Util;

/**
 * Description of EmaiCapable
 *
 * @author Ivan Tijanic <ivan.tijanic@domen.com>
 */
interface EmaiCapable {
    //put your code here
    
    /**
     * 
     */
    public function getEmail();
    
    /**
     * 
     * @param string $email
     */
    public function setEmail($email);
}
