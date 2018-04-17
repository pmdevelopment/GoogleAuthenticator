<?php

namespace PM\Bundle\GoogleAuthenticatorBundle\Services;

use Endroid\QrCode\QrCode;

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
     * @return string
     */
    public function getQrCode($name, $secret, $size = 400, $issuer = null)
    {
        $text = sprintf('otpauth://totp/%s?secret=%s', $name, $secret);

        if (true === is_string($issuer)) {
            $text = sprintf('%s&issuer=%s', $text, $issuer);
        }

        $qrCode = new QrCode($text);

        $qrCode->setSize($size);
        $qrCode->setWriterByName('png');
        $qrCode->setMargin(0);
        $qrCode->setEncoding('UTF-8');
        $qrCode->setSize($size);
        $qrCode->setText($text);

        return $qrCode->writeString();
    }

}
