<?php
/**
 * SOLID
 * O - Принцип открытости / закрытости.
 * Open/Closed principle.
 */

$logger = new LoggerDb();
$product = new Product($logger);
$product->setPrice(10);
