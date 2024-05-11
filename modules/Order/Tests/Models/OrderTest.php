<?php

declare(strict_types=1);

namespace Modules\Order\Tests\Models;

use Modules\Order\Models\Order;
use Modules\Order\Tests\OrderTestCase;

class OrderTest extends OrderTestCase
{
    public function test_it_can_create_order(): void
    {
        $order = new Order();

        $this->assertTrue(true);
    }
}
