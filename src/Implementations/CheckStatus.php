<?php
/**
 * Created by PhpStorm.
 * User: mhh1422
 * Date: 03/01/2017
 * Time: 10:49 AM
 */

namespace ItvisionSy\Payment\PayFort\Implementations;

use ItvisionSy\Payment\PayFort\Contracts\NotTokenizableImplementation;

class CheckStatus extends \ItvisionSy\Payment\PayFort\Operations\CheckStatus implements NotTokenizableImplementation
{

    use \ItvisionSy\Payment\PayFort\Traits\NotTokenizableImplementation;

}