<?php
/**
 * Created by PhpStorm.
 * User: armandfardeau
 * Date: 14/05/2017
 * Time: 23:40
 */

$context['foo'] = 'bar';
$context['stuff'] = 'I am a value set in your functions.php file';
$context['notes'] = 'These values are available everytime you call Timber::get_context();';
$context['menu'] = new TimberMenu();
$context['site'] = $this;
$context['qux'] = 'heyyyyy';