<?php
/**
 * SOLID
 * L - Принцип подстановки Барбары Лисков.
 * Liskov Substitution Principle (LSP).
 */

$bird = new Bird();
//$bird = new Duck();
//$bird = new Penguin();
$birdRun = new BirdRun($bird);
$birdRun->run();