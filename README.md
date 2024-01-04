BayWa r.e. LUSY TMS/WMS messages
================================

BayWa r.e. LUSY Messaging between TMS &amp; WMS

## Installation
```shell
./composer.phar require baywa-re-lusy/tms-wms-messages
```

## Usage
```php
use \BayWaReLusy\TmsWmsMessages\TmsToWmsUpdateHydrator;
use \BayWaReLusy\TmsWmsMessages\TmsToWmsUpdate;

$messageData = [...];

$hydrator       = new TmsToWmsUpdateHydrator();
$tmsToWmsUpdate = $hydrator->hydrate($messageData, new TmsToWmsUpdate());

$pickingOrderId = $tmsToWmsUpdate->getPickingOrderId();
```
