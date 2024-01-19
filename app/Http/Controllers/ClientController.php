<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ClientController extends Controller
{
    public function getClients()
    {
        return response()->json(Client::all(), 200);
    }

    public function getClientById($id)
    {
        try {
            $client = Client::findOrFail($id);
            return response()->json($client, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 404);
        }
    }

    public function postNewClient(Request $request)
    {
        $client = Client::create($request->all());
        return response()->json($client, 201);
    }

    public function putEditClient(Request $request, $id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->update($request->all());
            return response()->json($client, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 404);
        }
    }

    public function deleteClient($id)
    {
        try {
            $client = Client::findOrFail($id);
            $client->delete();
            return response()->json('Record deleted successfully!', 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 404);
        }
    }
}
