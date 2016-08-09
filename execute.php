<?php
use FacebookAds\Api;

$app_id = 145634995501895;

$access_token = 'EAACEdEose0cBAKr7YZAAEgBjML0h8eikPwredryIcvYD74Apa2VMHyZBVMXTWKPQ8lvD8wZB3EjocOPMyM4k20xfkoqf1jOkkZCQRCohNL3gaSc83PZB3rFLkMPTJcZAtZBSzfGrS6MejNcFdYaPsJqDgr25UqIGt72GxHRM4pJfHeZAWAXqPuUq';

// Initialize a new Session and instanciate an Api object
Api::init($app_id, $app_secret, $access_token);

// The Api object is now available trough singleton
$api = Api::instance();

$request = new FacebookRequest(
  $session,
  'GET',
  '/me',
  array(
    'fields' => 'id,name'
  )
);

$response = $request->execute();
$graphObject = $response->getGraphObject();
/* handle the result */
