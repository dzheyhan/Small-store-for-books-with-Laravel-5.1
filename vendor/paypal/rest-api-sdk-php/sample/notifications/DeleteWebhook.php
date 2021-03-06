<?php

// # Delete Webhook Sample
//
// This sample code demonstrate how to use this call to search for all webhook events., as documented here at:
// https://developer.paypal.com/docs/api/#delete-a-webhook
// API used: DELETE v1/notifications/webhooks/<Webhook-Id>

// ## Get Webhook Instance

/** @var \PayPal\Api\Webhook $webhook */
$webhook = require 'CreateWebhook.php';


// ### Delete Webhook
try {
    $output = $webhook->delete($apiContext);
} catch (Exception $ex) {
    ResultPrinter::printError("Delete a Webhook", "Webhook", null, $webhookId, $ex);
    exit(1);
}

ResultPrinter::printResult("Delete a Webhook", "Webhook", $webhook->getId(), null, null);

return $output;
