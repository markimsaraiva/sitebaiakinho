<?php
require_once 'config/config.php';
/*
 ************************************************************************
 PagSeguro Config File
 ************************************************************************
 */

$PagSeguroConfig = array();

$PagSeguroConfig['environment'] = "production"; // production, sandbox

$PagSeguroConfig['credentials'] = array();
$PagSeguroConfig['credentials']['email'] = $config['pagSeguro']['email'];
$PagSeguroConfig['credentials']['token']['production'] = $config['pagSeguro']['token'];
$PagSeguroConfig['credentials']['token']['sandbox'] = "B462B6CE61784785B9BE5929716ADDB9";

$PagSeguroConfig['application'] = array();
$PagSeguroConfig['application']['charset'] = "UTF-8"; // UTF-8, ISO-8859-1

$PagSeguroConfig['log'] = array();
$PagSeguroConfig['log']['active'] = false;
$PagSeguroConfig['log']['fileLocation'] = "";
