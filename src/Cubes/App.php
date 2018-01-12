<?php

namespace Cubes;

use Cubes\Cubes\Firma\Osoba;
use \Cubes\HR\Osoba as HROsoba;
/**
 * Description of App
 *
 * @author backend
 */
class App {
 
    /**
     *
     * @var \Cubes\Firma\Osoba
     */
    protected $firmaOsoba;
    
    /**
     *
     * @var \Cubes\HR\Osoba
     */
    protected $hrOsoba;
    
    public function getFirmaOsoba(): \Cubes\Firma\Osoba {
        return $this->firmaOsoba;
    }

    public function getHrOsoba(): \Cubes\HR\Osoba {
        return $this->hrOsoba;
    }

    public function setFirmaOsoba(Osoba $firmaOsoba) {
        $this->firmaOsoba = $firmaOsoba;
    }

    public function setHrOsoba(HROsoba $hrOsoba) {
        $this->hrOsoba = $hrOsoba;
        return $this;
    }


}
