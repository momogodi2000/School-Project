<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use BaconQrCode\Encoder\QrCode;
use BaconQrCode\Renderer\Image\Png;
use App\Models\BirthCertificate;

class BirthController extends Controller
{
    public function showForm()
    {
        return Birth_Doc('/Birth_Doc/birth');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'child_name' => 'required',
            'sex' => 'required',
            'date_of_birth' => 'required',
            'place_of_birth' => 'required',
            'mother_name' => 'required',
            'place_of_birth_of_mother' => 'required',
            'mother_profession' => 'required',
            'father_name' => 'required',
            'place_of_birth_of_father' => 'required',
            'father_profession' => 'required',
            'residents_of_parent' => 'required',
            'declaration' => 'required',
        ]);

        $data = $request->only([
            'child_name',
            'sex',
            'date_of_birth',
            'place_of_birth',
            'mother_name',
            'place_of_birth_of_mother',
            'mother_profession',
            'father_name',
            'place_of_birth_of_father',
            'father_profession',
            'residents_of_parent',
            'declaration',

        ]);

        $qrCodeText = "Child Name: {$data['child_name']}\nsex: {$data['sex']}\nDate of Birth: {$data['date_of_birth']}\nPlace of Birth: {$data['place_of_birth']}\nMother's Name: {$data['mother_name']}\nmother profession: {$data['mother_profession']}\nFather's Name: {$data['father_name']}\nresidents of parent: {$data['residents_of_parent']}";
        $qrCode = new QrCode($qrCodeText);
        $renderer = new Png();
        $renderer->setWidth(200);
        $renderer->setHeight(200);
        $qrCodeImage = $renderer->render($qrCode);
        $qrCodeImageData = base64_encode($qrCodeImage);

        $data['qr_code'] = $qrCodeImageData;

        BirthCertificate::create($data);

        return redirect()->back()->with('success', 'Birth certificate submitted successfully!');
    }
}