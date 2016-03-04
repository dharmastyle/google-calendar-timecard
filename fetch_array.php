<?php
require __DIR__ . '/config.php';

// Fetch CLI params
$year = $argv[1];  // eg: 2015

// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

$calendarId = 'primary';
$optParams = array(
  'singleEvents' => TRUE,
  'orderBy' => 'startTime',
  'q' => 'i * work',
  'maxResults' => 1000,
  'timeMin' => date('c', strtotime("$year-01-01")),
  'timeMax' => date('c', strtotime("$year-12-31")),
);
$results = $service->events->listEvents($calendarId, $optParams);

$days = [];
$yesterday = '';
$defaultHour = '0.00';

foreach ($results->getItems() as $event) {
  // Init event date
  $start = $event->start->dateTime;
  if (empty($start)){ $start = $event->start->date; }
  $d = new DateTime($start);

  $today = $d->format('d/m/Y');
  $hour = $d->format('H.i');

  $action = strstr($event->summary, 'entered') ? 'I' : 'O';

  if ($today == $yesterday) {
    if (!isset($days[$yesterday]['I'])) {
      $days[$yesterday]['I'] = $defaultHour;
    }
    if (!isset($days[$yesterday]['O'])) {
      $days[$yesterday]['O'] = $defaultHour;
    }

    $days[$today]['I'] = min($hour, $days[$yesterday]['I']);
    $days[$today]['O'] = max($hour, $days[$yesterday]['O']);
  } else {
    $days[$today][$action] = $hour;
  }

  // Save the full log
  // $days[$today][$action][] = $hour;

  // Set next day
  $yesterday = $today;
}

// Header
printf("GIORNO\tINIZIO\tFINE\tDURATA\n");

foreach ($days as $day => $hours) {
  $in = isset($hours['I']) ? $hours['I'] : $defaultHour;
  $out = isset($hours['O']) ? $hours['O'] : $defaultHour;
  printf("%s\t%s\t%s\n", $day, $in, $out);
}

// Debug
// print_r($days);
