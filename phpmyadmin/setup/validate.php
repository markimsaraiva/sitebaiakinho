<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * Validation callback.
 *
 * @package phpMyAdmin-setup
 */

/**
 * Core libraries.
 */
require './lib/common.inc.php';

$validators = array();
require './libraries/config/validate.lib.php';

header('Content-type: application/json');

$ids = isset($_POST['id']) ? $_POST['id'] : null;
$vids = explode(',', $ids);
$vals = isset($_POST['values']) ? $_POST['values'] : null;
$values = json_decode($vals);
if (!($values instanceof stdClass)) {
    die('Wrong data');
}
$values = (array)$values;
$result = PMA_config_validate($vids, $values, true);
if ($result === false) {
    $result = 'Wrong data or no validation for ' . $vids;
}
echo $result !== true ? json_encode($result) : '';
?>
