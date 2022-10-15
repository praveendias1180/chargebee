<?php

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\Customer;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Environment::configure($_ENV['CHARGEBEE_USER'], $_ENV['CHARGEBEE_KEY']);
$result = Customer::create(array(
  "firstName" => "Praveen",
  "lastName" => "Dias",
  "email" => "praveen@chargebee.com",
  "locale" => "fr-CA",
  "billingAddress" => array(
    "firstName" => "Praveen",
    "lastName" => "Dias",
    "line1" => "PO Box 9999",
    "city" => "Walnut",
    "state" => "Sri Lanka",
    "zip" => "91789",
    "country" => "LK"
    )
  ));
$customer = $result->customer();
$card = $result->card();

echo '<pre>';
var_dump($result);
echo '</pre>';