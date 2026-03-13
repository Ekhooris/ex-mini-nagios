<?php
namespace Tests;

use PHPUnit\Framework\TestCase;
use App\Validator;

Class HostnameValide extends TestCase {
    public function testHostnameValid() {
        $resultat = Validator::isHostnameValid("SRV-WB-01");
        $this->assertTrue($resultat, "SRV-WB-01 devrait être valide");
    }

    }
    public function testHostnameValid() {
        $resultat = Validator::isHostnameValid("srv-web");
        $this->assertTrue($resultat, "srv-web devrait être valide");
    }

    public function testHostnameInvalid() {
    $resultat = Validator::isHostnameValid("SRV WEB");
    $this->assertFalse($resultat, "SRV WEB ne devrait pas être valide");

}

public function testHostnameInvalid() {
    $resultat = Validator::isHostnameValid("SRV_WEB");
    $this->assertFalse($resultat, "SRV_WEB ne devrait pas être valide");

}


}