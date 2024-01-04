<?php

namespace BayWaReLusy\TmsWmsMessages;

class TmsToWmsUpdate
{
    /** @var string|null Picking Order ID */
    protected ?string $pickingOrderId = null;

    /**
     * @return string|null
     */
    public function getPickingOrderId(): ?string
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
