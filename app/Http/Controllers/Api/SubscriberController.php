<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SubscriberController extends Controller
{

    public function index()
    {
        $subscribers = Subscriber::orderBy('created_at', 'desc')->paginate(10);

        return response()->json([
            'success' => true,
            'data' => $subscribers
        ]);
    }


    public function show($id)
    {
        $subscriber = Subscriber::find($id);

        if (!$subscriber) {
            return response()->json([
                'success' => false,
                'message' => 'Suscriptor no encontrado'
            ], 404);
        }

        return response()->json([
            'success' => true,
            'data' => $subscriber
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'unique:subscribers,email']
        ]);

        $subscriber = Subscriber::create($validated);

        return response()->json([
            'success' => true,
            'message' => 'Suscriptor creado correctamente',
            'data' => $subscriber
        ], 200);
    }

    public function update(Request $request, $id)
    {
        $subscriber = Subscriber::find($id);

        if (!$subscriber) {
            return response()->json([
                'success' => false,
                'message' => 'Suscriptor no encontrado'
            ], 404);
        }

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                Rule::unique('subscribers')->ignore($subscriber->id)
            ]
        ]);

        $subscriber->update($validated);

        return response()->json([
            'success' => true,
            'message' => 'Suscriptor actualizado correctamente',
            'data' => $subscriber
        ]);
    }

    public function destroy($id)
    {
        $subscriber = Subscriber::find($id);

        if (!$subscriber) {
            return response()->json([
                'success' => false,
                'message' => 'Suscriptor no encontrado'
            ], 404);
        }

        $subscriber->delete();

        return response()->json([
            'success' => true,
            'message' => 'Suscriptor eliminado correctamente'
        ]);
    }


    public function sendMails(Request $request)
    {
        $request->validate([
            'destinatarios' => 'required|array',
            'destinatarios.*.name' => 'required|string',
            'destinatarios.*.email' => 'required|email'
        ]);

        foreach ($request->destinatarios as $destinatario) {
            Mail::to($destinatario['email'])
                ->queue(new SendMail( //send en ves de queeue para enviar inmediatamente
                    $destinatario['name'],
                    $destinatario['email']
                ));
        }

        return response()->json([
            'status' => 'success',
            'mensaje' => 'Correos encolados correctamente'
        ]);
    }

}
