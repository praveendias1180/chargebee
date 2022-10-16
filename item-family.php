<?php

/**
 * https://apidocs.chargebee.com/docs/api/item_families?prod_cat_ver=2
 */

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\ItemFamily;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Environment::configure($_ENV['CHARGEBEE_USER'], $_ENV['CHARGEBEE_KEY']);
$result = ItemFamily::create(array(
  "id" => "rq_inc_family",
  "description" => "Range Quest Inc",
  "name" => "RQ Products"
  ));
$itemFamily = $result->itemFamily();