BayWa r.e. LUSY TMS/WMS messages
================================

BayWa r.e. LUSY Messaging between TMS &amp; WMS

## Installation
```shell
./composer.phar require baywa-re-lusy/tms-wms-messages
```

## Usage
To create a message & serialize it :
```php
use \BayWaReLusy\TmsWmsMessages\TmsToWmsUpdate;

$tmsToWmsUpdate = new TmsToWmsUpdate();
$tmsToWmsUpdate->setPickingOrderId($pickingOrder->getId());

$jsonMessage = $tmsToWmsUpdate->serializeToJson();
```

To deserialize a message :
```php
use \BayWaReLusy\TmsWmsMessages\TmsToWmsUpdate;

$jsonMessage = '{...}';

$tmsToWmsUpdate = TmsToWmsUpdate::createFromJsonString($jsonMessage);
$pickingOrderId = $tmsToWmsUpdate->getPickingOrderId();
```
