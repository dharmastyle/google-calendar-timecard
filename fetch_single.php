<?php
require __DIR__ . '/config.php';

// Fetch CLI params
$inout = $argv[1]; // eg: entered, exited
$year = $argv[2];  // eg: 2015

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

$calendarId = 'primary';
$optParams = array(
  'singleEvents' => TRUE,
  'orderBy' => 'startTime',
  'q' => 'i '. $inout .' work',
  'maxResults' => 1000,
  'timeMin' => date('c', strtotime("$year-01-01")),
  'timeMax' => date('c', strtotime("$year-12-31")),
);
$results = $service->events->listEvents($calendarId, $optParams);

foreach ($results->getItems() as $event) {
  $start = $event->start->dateTime;
  if (empty($start)) {
    $start = $event->start->date;
  }
  $d = new DateTime($start);
  printf("%s\t%s\n", $d->format('d/m/Y'), $d->format('H:i:s'));
}
