<?php
# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Speech\SpeechClient;

# Your Google Cloud Platform project ID
$projectId = 'medialab-197412 ';

$config = [
    'projectId' => $projectId,
];


# Instantiates a client
$speech = new SpeechClient([
    'projectId' => $projectId,
    'languageCode' => 'en-US',
]);

# The name of the audio file to transcribe
$fileName = __DIR__ . '/resources/test.ogg';

# The audio file's encoding and sample rate
$options = [
    'encoding' => 'LINEAR16',
    'sampleRateHertz' => 16000,
];

# Detects speech in the audio file
$results = $speech->recognize(fopen($fileName, 'r'), $options);
var_dump($results);
foreach ($results as $result) {
    echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
//    $question = $result->alternatives()[0]['transcript'] . PHP_EOL;
}