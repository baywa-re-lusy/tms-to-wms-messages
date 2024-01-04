<?php

namespace BayWaReLusy\TmsWmsMessages\Test;

use BayWaReLusy\TmsWmsMessages\TmsToWmsUpdate;
use BayWaReLusy\TmsWmsMessages\TmsToWmsUpdateHydrator;
use PHPUnit\Framework\TestCase;

class TmsToWmsUpdateHydratorTest extends TestCase
{
    protected TmsToWmsUpdateHydrator $instance;

    protected function setUp(): void
    {
        $this->instance = new TmsToWmsUpdateHydrator();
    }

    public function testHydrate(): void
    {
        $id = 'c9450096-cce9-41c6-9516-6dc9a92eed37';
        $hydratedObject = $this->instance->hydrate(['pickingOrderId' => $id], new TmsToWmsUpdate());
        $this->assertEquals($id, $hydratedObject->getPickingOrderId());
    }

    public function testExtract(): void
    {
        $id = 'c9450096-cce9-41c6-9516-6dc9a92eed37';
        $object = new TmsToWmsUpdate();
        $object->setPickingOrderId($id);
        $this->assertEquals(['pickingOrderId' => $id], $this->instance->extract($object));
    }
}
