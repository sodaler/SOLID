<?php
/**
 * SOLID
 * S - Принцип единственной обязанности (ответственности)
 * Single responsibility principle
 */

$logger = new Logger();
$product = new Product($logger);
$product->setPrice(10);

