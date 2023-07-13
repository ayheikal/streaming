<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use GuzzleHttp\Client;

class AudioController extends Controller
{
    public function processAudio(Request $request)
    {
        $audioStream = $request->getContent();

        // process the audio stream
        $processedAudioStream = $this->processStream($audioStream);

        // return the response
        return response()->stream(function() use ($processedAudioStream) {
            echo $processedAudioStream;
        }, 200, [
            'Content-Type' => 'audio/mpeg',
            'Content-Disposition' => 'attachment; filename="processed-audio.mp3"',
        ]);
    }

    private function processStream($audioStream)
    {
        // manipulate the audio stream
        // ...

        // return the processed audio stream
        return $audioStream;
    }
    public function store(Request $request)
    {
        if (!$request->hasFile('audio')) {
            return response()->json(['error' => 'No audio file uploaded'], 400);
        }

        $audio = $request->file('audio');
        $filename = $audio->hashName();
        $path = $audio->store('audio');

        $client = new Client();
        $response = $client->request('POST', 'https://speech.googleapis.com/v1/speech:recognize', [
            'query' => [
                'key' => 'AIzaSyCCnpdTUsOWZkgWs_yB0avU8JufGLrvAus',
            ],
            'json' => [
                'config' => [
                    'encoding' => 'LINEAR16',
                    'sampleRateHertz' => 44100,
                    'languageCode' => 'en-US',
                ],
                'audio' => [
                    'content' => base64_encode(file_get_contents($audio->path())),
                ],
            ],
        ]);

        if ($response->getStatusCode() == 200) {
            $responseJson = json_decode($response->getBody(), true);
            $transcription = $responseJson['results'][0]['alternatives'][0]['transcript'];

            // Do something with the transcription
            // ...

            return response()->json(['transcription' => $transcription]);
        } else {
            return response()->json(['error' => 'Error processing audio'], $response->getStatusCode());
        }
    }
}
