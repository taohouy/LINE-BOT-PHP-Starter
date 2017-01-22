<?php

$challenge = $_REQUEST['hub_challenge'];
$verify_token = $_REQUEST['hub_verify_token'];

if ($verify_token === 'EAAFiLqqrKJcBAB4VhpNrZAOqARlmgVpGMZBfVQ0qPVtjLphoe5IFTW1RbYh7Knu9mNfWQMvQGCimPJYbXptkwmsXlqIZCvuZA95W2TedNLIERhSzBqmpXTBJn74T6fz6NanSmMRb9k8XRXWg5V4eHkvbPC9KzlCeqpZAMba8Q7gZDZD') {
  echo $challenge;
}

$input = json_decode(file_get_contents('php://input'), true);
error_log(print_r($input, true));
