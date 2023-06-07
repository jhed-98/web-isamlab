<?php

namespace App\Http\Controllers;

use App\Models\Forms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use SheetDB\SheetDB;

class WelcomeController extends Controller
{
    public function postFormCursos(Request $request)
    {
        $validatedData = $request->validate(
            [
                'name' => ['required', 'max:255'],
                'last_name' => ['required'],
                'email' => [
                    'required',
                    'email', 'regex:/^\w+[-\.\w]*@(?!(?:outlook|myemail|yahoo)\.com$)\w+[-\.\w]*?\.\w{2,4}$/'
                ],
                'phone' => ['required', 'numeric'],
                'check_info' => ['nullable'],
                'check_politica' => ['required'],
            ],
            [
                'name.required' => 'El campo de Nombre es obligatorio',
                'last_name.required' => 'El campo de Apellido es obligatorio',
                'email.required' => 'El campo de Correo es obligatorio',
                'phone.required' => 'El campo de Celular es obligatorio',
                'phone.numeric' => 'El campo de Celular debe ser números',
                // 'check_info.required' => 'La casilla es obligatorio',
                'check_politica.required' => 'La casilla es obligatorio'
            ]
        );

        $forms = Forms::create($request->all());

        $sheetdb = new SheetDB("c25gp15bkwt2s");

        $client = new \GuzzleHttp\Client([
            'headers' => [
                'Content-Type' => 'application/json'
            ]
        ]);

        $data = [
            'data' => [
                'id' => $forms['id'],
                'name' => $forms['name'],
                'last_name' => $forms['last_name'],
                'email' => $forms['email'],
                'phone' => $forms['phone'],
                'check_info' => $forms['check_info'] ?? 'off',
                'created_at' => $forms['created_at'],
            ]
        ];

        $response = $client->post('https://sheetdb.io/api/v1/' . env('API_SHEET_DB'), [
            'body' => json_encode($data),
        ]);

        $response->getBody()->getContents();

        return redirect()->back()->withErrors(['msg' => 'Se envio correctamente sus datos.']);;
    }
}
