<?php

namespace Dovona\Common\Types\Date;

use Dovona\Common\Types\AbstractEnumeration;

/**
 * Enumeration type declaration for month names. 
 *
 * @since 0.0.1
 *
 * @author Daniel Jorj <daniel.jorj@dovona.com>
 */
class Month extends AbstractEnumeration
{
    const __default = self::January;
    
    const January   = 1;
    const February  = 2;
    const March     = 3;
    const April     = 4;
    const May       = 5;
    const June      = 6;
    const July      = 7;
    const August    = 8;
    const September = 9;
    const October   = 10;
    const November  = 11;
    const December  = 12;
}