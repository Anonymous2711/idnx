<?php

namespace App\Http\Controllers;

use Http;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function routestart() {
        $response = Http::withOptions(['verify' => false])
        ->get('https://apim.solog.id:8080/idnx/routestart/');

        return response()->json($response->body());
    }
    public function routeEnd(Request $request) {
        $originID = $request->originID;
        // $originID = "85bcf1a4-f409-4776-bf48-cca06c08beed";
        $response = Http::withOptions(['verify' => false])
        ->get('https://apim.solog.id:8080/idnx/routeend/'.$originID);

        return response()->json($response->body());
    }
    public function commodity() {
        $response = Http::withOptions(['verify' => false])
        ->get('https://apim.solog.id:8080/idnx/commodity/');

        return response()->json($response->body());
    }
    public function calculate(Request $request) {
        $originID = $request->originID;
        $destinationID = $request->destinationID;
        $endpoint = "https://apim.solog.id:8080/idnx/price/".$originID."/".$destinationID;

        $response = Http::withOptions(['verify' => false])->get($endpoint);

        return response()->json($response->body());
    }
    public function resi(Request $request) {
        $resi = $request->resi;
        $endpoint = "https://apim.solog.id:8080/idnx/resi/".$resi;

        $response = Http::withOptions(['verify' => false])->get($endpoint);

        return response()->json($response->body());
    }
    public function company(Request $request) {
        $endpoint = "https://apim.solog.id:8080/idnx/company";

        if($request->filled("search")){
            $endpoint = "https://apim.solog.id:8080/idnx/company?search=".$request->search;
        }
        $response = Http::withOptions(['verify' => false])->get($endpoint);

        return response()->json($response->body());
    }
}
