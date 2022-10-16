<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemPrice;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Environment::configure($_ENV['CHARGEBEE_USER'], $_ENV['CHARGEBEE_KEY']);
$result = ItemPrice::create(array(
  "id" => "rq_silver_USD_monthly",
  "itemId" => "rq_silver",
  "name" => "silver USD monthly",
  "pricingModel" => "per_unit",
  "price" => 19900,
  "externalName" => "RQ Silver USD",
  "periodUnit" => "month",
  "period" => 1
  ));
$itemPrice = $result->itemPrice();