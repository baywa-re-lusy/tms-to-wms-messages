<?php

namespace BayWaReLusy\TmsWmsMessages;

class TmsToWmsUpdate
{
    /** @var string Picking Order ID */
    protected string $pickingOrderId;

    /**
     * @return string
     */
    public function getPickingOrderId(): string
    {
        return $this->pickingOrderId;
    }

    /**
     * @param string $pickingOrderId
     * @return void
     */
    public function setPickingOrderId(string $pickingOrderId): void
    {
        $this->pickingOrderId = $pickingOrderId;
    }
}
