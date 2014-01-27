<?php

namespace PM\Bundle\GoogleAuthenticatorBundle\Services;

use PHPGangsta_GoogleAuthenticator;

/**
 * Description of GoogleAuthenticator
 *
 * @author sjoder
 */
class GoogleAuthenticatorService {

   /**
    * 
    * @return PHPGangsta_GoogleAuthenticator
    */
   public function __construct() {
      require_once __DIR__ . "/../PHPGangsta/GoogleAuthenticator.php";
      return new PHPGangsta_GoogleAuthenticator();
   }

}
