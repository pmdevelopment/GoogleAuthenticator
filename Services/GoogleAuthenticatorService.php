<?php

namespace PM\Bundle\GoogleAuthenticatorBundle\Services;

use Endroid\QrCode\QrCode;
use Symfony\Component\HttpFoundation\Response;

require_once sprintf('%s/../PHPGangsta/GoogleAuthenticator.php', __DIR__);

/**
 * Description of GoogleAuthenticator
 *
 * @author sjoder
 */
class GoogleAuthenticatorService extends \PHPGangsta_GoogleAuthenticator
{

    /**
     * Get QR Code Image
     *
     * @param string      $name
     * @param string      $secret
     * @param int         $size
     * @param string|null $issuer
     *
     * @return Response
     *
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionFailedException
     * @throws \Endroid\QrCode\Exceptions\ImageFunctionUnknownException
     */
    public function getQrCode($name, $secret, $size = 400, $issuer = null)
    {

        $text = "otpauth://totp/$name?secret=$secret";

        if ($issuer) {
            $text .= "&issuer=$issuer";
        }

        $extension = "png";

        $qrCode = new QrCode();

        $qrCode->setSize($size);
        $qrCode->setText($text);

        return $qrCode->get($extension);
    }

}
