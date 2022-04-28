<?php


namespace App\Services;


use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class PhoneSearch
{

    protected $endpoint, $token;

    public function __construct()
    {
        $this->endpoint = env('HLR_ENDPOINT');
        $this->token = env('HLR_TOKEN');
    }


    public function search($number)
    {

        $url = "{$this->endpoint}/lookup?p={$this->token}&type=hlr&number={$number}";

        \Log::info('SEARCH URL - ' . $url);

        $req = Http::get($url);

        if ($req->status() == 200) {
            $res = $req->json();
        } else {
            Log::error("SERVICE REQUEST ERROR ".$req->status());
            throw new \Exception("Error del servicio... por favor inténtalo en un rato", $req->status());
        }

        return $res;
    }
}
