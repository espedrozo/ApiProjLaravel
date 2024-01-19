<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\Customer;

class SyncController extends Controller
{
    public function syncDatabases()
    {
        try {
            // Obtenha todos os registros do banco de dados 1
            $customersFromDatabase1 = Customer::all(['id', 'first_name', 'last_name', 'sex', 'birth_date']);

            // Sincronize cada cliente para o banco de dados 2
            foreach ($customersFromDatabase1 as $customer) {
                Client::updateOrInsert(['id' => $customer->id], $customer->toArray());
            }

            return response()->json(['message' => 'Database synchronization completed.']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error during database synchronization.', 'message' => $e->getMessage()], 500);
        }
    }
}
