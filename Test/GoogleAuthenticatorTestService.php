<?php
/**
 * Created by PhpStorm.
 * User: sjoder
 * Date: 04.05.2017
 * Time: 15:07
 */

namespace PM\Bundle\GoogleAuthenticatorBundle\Test;

use PM\Bundle\GoogleAuthenticatorBundle\Services\GoogleAuthenticatorService;

/**
 * Class GoogleAuthenticatorTestService
 *
 * @package PM\Bundle\GoogleAuthenticatorBundle\Test
 */
class GoogleAuthenticatorTestService extends GoogleAuthenticatorService
{
    const CODE_VALID = 123456;
    const CODE_INVALID = 313373;

    /**
     * Check if the code is correct. This will accept codes starting from $discrepancy*30sec ago to $discrepancy*30sec from now
     *
     * @param string $secret
     * @param string $code
     * @param int    $discrepancy This is the allowed time drift in 30 second units (8 means 4 minutes before or after)
     *
     * @return bool
     */
    public function verifyCode($secret, $code, $discrepancy = 1)
    {
        if (self::CODE_VALID === intval($code)) {
            return true;
        }

        return false;
    }

}