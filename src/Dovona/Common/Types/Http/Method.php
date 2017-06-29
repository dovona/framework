<?php

namespace Dovona\Common\Types\Http;

use Dovona\Common\Types\AbstractEnumeration;

/**
 * Enumeration type declaration for available HTTP methods. 
 *
 * @since 0.0.1
 *
 * @author Daniel Jorj <daniel.jorj@dovona.com>
 */
class Method extends AbstractEnumeration
{    
    const GET     = "GET";
    const POST    = "POST";
    const PUT     = "PUT";
    const DELETE  = "DELETE";
    const HEAD    = "HEAD";
    const OPTIONS = "OPTIONS";
    const TRACE   = "TRACE";
    const CONNECT = "CONNECT";
}