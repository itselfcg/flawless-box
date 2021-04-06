<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Address;
use Illuminate\Http\Request;

class AddressController extends Controller
{

    public function store(Request $request)
    {
        $address = new Address();
        $address->name = $request->nameAddress;
        $address->last_name = $request->lastNameForAddress;
        $address->city = $request->city;
        $address->street = $request->street;
        $address->state = $request->state;
        $address->zip_code = $request->zipcode;
        $address->phone_number = $request->phoneNumber;
        $address->save();
        return $address;
    }


    public function edit($id)
    {
        return Address::find($id);
    }

    public static function editByUser($userId){
        $account= Account::where('user_id', $userId)->get()->first();
        return Address::where('id', $account->address_id)->get()->first();
    }


    public function update(Request $request, $id)
    {
        $address = Address::find($id);
        $address->name = $request->nameAddress;
        $address->last_name = $request->lastNameForAddress;
        $address->city = $request->city;
        $address->street = $request->street;
        $address->state = $request->state;
        $address->zip_code = $request->zipcode;
        $address->phone_number = $request->phoneNumber;
        $address->save();
        return $address;
    }

}
