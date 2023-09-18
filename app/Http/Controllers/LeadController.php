<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LeadController extends Controller
{
    public function get_leads()
    {
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
