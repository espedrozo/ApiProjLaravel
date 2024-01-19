<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function getCustomers()
    {
        return response()->json(Customer::all(), 200);
    }

    public function getCustomerById($id)
    {
        try {
            $customer = Customer::findOrFail($id);
            return response()->json($customer, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 404);
        }
    }

    public function postNewCustomer(Request $request)
    {
        $customer = Customer::create($request->all());
        return response()->json($customer, 201);
    }

    public function putEditCustomer(Request $request, $id)
    {
        try {
            $customer = Customer::findOrFail($id);
            $customer->update($request->all());
            return response()->json($customer, 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 404);
        }
    }

    public function deleteCustomer($id)
    {
        try {
            $customer = Customer::findOrFail($id);
            $customer->delete();
            return response()->json('Record deleted successfully!', 200);
        } catch (ModelNotFoundException $e) {
            return response()->json(["message" => "Record not found!"], 404);
        }
    }
}