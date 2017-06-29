<?php

namespace Dovona\Common\Types\Date;

use Dovona\Common\Types\AbstractEnumeration;

/**
 * Enumeration type declaration for week names.
 *
 * @since 0.0.2
 *
 * @author Daniel Jorj <daniel.jorj@dovona.com>
 */
class Day extends AbstractEnumeration
{
    const __default = self::Monday;

    const Monday    = 1;
    const Tuesday   = 2;
    const Wednesday = 3;
    const Thursday  = 4;
    const Friday    = 5;
    const Saturday  = 6;
    const Sunday    = 7;
}
