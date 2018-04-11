<?php
<<<<<<< HEAD
/**
 * Created by PhpStorm.
 * User: sisko
 * Date: 11-4-2018
 * Time: 21:28
 */

# Includes the autoloader for libraries installed with composer
require DIR . '/vendor/autoload.php';
=======
# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';
>>>>>>> bd65355024e7f00137fc20ab7d46a6c695b58d0b

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
<<<<<<< HEAD
$fileName = DIR . '/resources/audio.raw';
=======
$fileName = __DIR__ . '/resources/audio.raw';
>>>>>>> bd65355024e7f00137fc20ab7d46a6c695b58d0b

# The audio file's encoding and sample rate
$options = [
    'encoding' => 'LINEAR16',
    'sampleRateHertz' => 16000,
];

# Detects speech in the audio file
$results = $speech->recognize(fopen($fileName, 'r'), $options);

foreach ($results as $result) {
    echo 'Transcription: ' . $result->alternatives()[0]['transcript'] . PHP_EOL;
}