<?php

namespace BayWaReLusy\TmsWmsMessages;

class TmsToWmsUpdate implements TmsWmsMessageInterface
{
    /** @var string|null Picking Order ID */
    protected ?string $pickingOrderId = null;

    /**
     * @inheritDoc
     */
    public static function createFromJsonString(string $json): TmsToWmsUpdate
    {
        $tmsToWmsUpdate = new TmsToWmsUpdate();

        foreach (json_decode($json, true) as $key => $value) {
            $method = 'set' . ucfirst($key);
            $tmsToWmsUpdate->$method($value);
        }

        return $tmsToWmsUpdate;
    }

    /**
     * @inheritDoc
     */
    public function serializeToJson(): string
    {
        return json_encode(['pickingOrderId' => $this->getPickingOrderId()]);
    }

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
