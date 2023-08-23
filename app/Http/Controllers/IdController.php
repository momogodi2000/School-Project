<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdCard;

class IdController extends Controller
{
    public function showForm()
    {
        return Id_card('/Id_card/national_id');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'full_name' => 'required',
            'date_of_birth' => 'required',
            'gender' => 'required',
            'address' => 'required',
        ]);

        $data = $request->only([
            'full_name',
            'date_of_birth',
            'gender',
            'address',
        ]);

        // Generate a unique QR code for each ID card
        $qrCodeText = json_encode($data);
        $qrCode = $this->generateUniqueQRCode($qrCodeText);
        $data['qr_code'] = $qrCode;

        IdCard::create($data);

        return redirect()->back()->with('success', 'ID card submitted successfully!');
    }

    // Generate a unique QR code
    private function generateUniqueQRCode($text)
    {
        // ... Your code to generate a unique QR code here ...
        // For example, you can use a library like "endroid/qr-code" to generate QR codes.
        
    }
}