<?php

namespace BayWaReLusy\TmsWmsMessages\Test;

use BayWaReLusy\TmsWmsMessages\TmsToWmsUpdate;
use PHPUnit\Framework\TestCase;

class TmsToWmsUpdateTest extends TestCase
{
    protected TmsToWmsUpdate $instance;

    protected function setUp(): void
    {
        $this->instance = new TmsToWmsUpdate();
    }

    public function testSetGetPickingOrderId(): void
    {
        $id = 'c9450096-cce9-41c6-9516-6dc9a92eed37';
        $this->instance->setPickingOrderId($id);
        $this->assertEquals($id, $this->instance->getPickingOrderId());
    }

    public function testCreateFromJsonString()
    {
        $object = TmsToWmsUpdate::createFromJsonString('{"pickingOrderId":"c9450096-cce9-41c6-9516-6dc9a92eed37"}');
        $this->assertEquals('c9450096-cce9-41c6-9516-6dc9a92eed37', $object->getPickingOrderId());
    }

    public function testSerializeToJson()
    {
        $id = 'c9450096-cce9-41c6-9516-6dc9a92eed37';
        $this->instance->setPickingOrderId($id);

        $this->assertEquals(
            '{"pickingOrderId":"c9450096-cce9-41c6-9516-6dc9a92eed37"}',
            $this->instance->serializeToJson()
        );
    }
}
