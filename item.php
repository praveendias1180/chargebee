<?php

/**
 * Create an item
 * 
 * https://apidocs.chargebee.com/docs/api/items?prod_cat_ver=2#create_an_item
 */

require_once('vendor/autoload.php');

use ChargeBee\ChargeBee\Environment;
use ChargeBee\ChargeBee\Models\Item;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

Environment::configure($_ENV['CHARGEBEE_USER'], $_ENV['CHARGEBEE_KEY']);
$result = Item::create(array(
  "id" => "rq_silver",
  "name" => "RQ Silver",
  "type" => "plan",
  "itemApplicability" => "all",
  "item_family_id" => "rq_inc_family"
  ));
$item = $result->item();