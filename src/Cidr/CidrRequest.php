<?php

/*
 * (c) Captain Courier Integration <captain@captaincourier.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cidr;

class CidrRequest
{ use Milk;

    private $requestContext; // sublcass of CidrRequestContext
    private $task; // type of request, ie CreateShipment, Quote
    private $courierCredentials = []; // associative array
    private $history = []; // CidrResponse[] with head being the most recent response object.
}