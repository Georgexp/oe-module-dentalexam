<?php
// index.php
require_once(dirname(__FILE__) . '/../../globals.php');

if (!acl_check('patients', 'write')) {
    die("Unauthorized access");
}

$encounterId = $_GET['encounter'] ?? '';
$patientId = $_GET['pid'] ?? '';

if (!$encounterId || !$patientId) {
    die("Encounter ID and Patient ID are required");
}

// Render the view
include_once(__DIR__ . '/views/dental_exam.php');