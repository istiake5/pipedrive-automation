<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    public function get_leads()
    {
        $response = Http::withBasicAuth('Guflone', '@23Greenland')
            ->withHeaders([
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'token' => '5698a47e671ef247b0da61db2a485f4d'
            ])
            ->post('https://showmojo.com/api/v3/reports/detailed_prospect_data', [
                // Your request data goes here if needed
            ]);
        return $response;
        // Your ShowMojo API token
        $apiToken = "5698a47e671ef247b0da61db2a485f4d";

        $response = Http::withToken($apiToken) // Set the API token
            ->withHeaders([
                'Accept' => 'application/json', // Specify the desired response format
                // Add any other required headers here
            ])
            ->post('https://showmojo.com/api/v3/reports/detailed_listing_data', [
                // Your request data goes here if needed
            ]);

        return $response;

        $get_leads = Http::get('https://api.pipedrive.com/v1/leads', [
            'api_token' => '758fd77da1984b9c93ccc43f28d2a0adaf0185e9'
        ]);
        return $get_leads;
    }

    public function get_persons()
    {
        $get_leads = Http::get('https://api.pipedrive.com/v1/persons', [
            'api_token' => '758fd77da1984b9c93ccc43f28d2a0adaf0185e9'
        ]);
        return $get_leads;
    }
}
