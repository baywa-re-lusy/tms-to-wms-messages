<?php

namespace BayWaReLusy\TmsWmsMessages;

interface TmsWmsMessageInterface
{
    /**
     * Create a message instance from a JSON string. Can be used to retrieve a message from the queue.
     * @param string $json The JSON representation of the message
     * @return TmsWmsMessageInterface The message instance
     */
    public static function createFromJsonString(string $json): TmsWmsMessageInterface;

    /**
     * Serialize a message object to a JSON string. Can be used to inject a message into the queue.
     * @return string The JSON representation of the message
     */
    public function serializeToJson(): string;
}
