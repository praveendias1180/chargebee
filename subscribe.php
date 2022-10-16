<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\Subscription;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Environment::configure($_ENV['CHARGEBEE_USER'], $_ENV['CHARGEBEE_KEY']);
$result = Subscription::createWithItems("cbdemo_richard",array(
    "subscriptionItems" => array(array(
      "itemPriceId" => "rq_silver_USD_monthly",
      "billingCycles" => 3,
      "quantity" => 1))
    ));
$subscription = $result->subscription();
$customer = $result->customer();
$card = $result->card();
$invoice = $result->invoice();
$unbilledCharges = $result->unbilledCharges();