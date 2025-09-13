<?php

namespace App\Http\Controllers\Front;

use Illuminate\Support\Facades\Http;

class YouTubeController extends Controller
{
    public function index()
    {
        $apiKey = env('YOUTUBE_API_KEY');
        $channelId = env('YOUTUBE_CHANNEL_ID');

        // Call YouTube API
        $response = Http::get("https://www.googleapis.com/youtube/v3/search", [
            'key' => $apiKey,
            'channelId' => $channelId,
            'part' => 'snippet,id',
            'order' => 'date',
            'maxResults' => 12, // number of videos
        ]);

        $videos = $response->json()['items'] ?? [];

        return view('frontend.index', compact('videos'));
    }
}
