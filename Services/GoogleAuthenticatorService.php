<?php

namespace PM\Bundle\GoogleAuthenticatorBundle\Services;

use Symfony\Component\HttpFoundation\Response;
use Endroid\QrCode\QrCode;

require_once __DIR__ . "/../PHPGangsta/GoogleAuthenticator.php";

/**
 * Description of GoogleAuthenticator
 *
 * @author sjoder
 */
class GoogleAuthenticatorService extends \PHPGangsta_GoogleAuthenticator {

   /**
    * Get QR Code Image
    * 
    * @param string $name
    * @param string $secret
    * @param int $size
    *
    * @return Response
    */
   public function getQrCode($name, $secret, $size = 400, $issuer = null) {

      $text = "otpauth://totp/$name?secret=$secret";

      if ($issuer)
         $text .= "&issuer=$issuer";

      $extension = "png";

      $qrCode = new QrCode();

      $qrCode->setSize($size);
      $qrCode->setText($text);

      return $qrCode->get($extension);
   }

}
