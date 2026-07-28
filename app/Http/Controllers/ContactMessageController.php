<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ContactMessageController extends Controller
{
    public function store(  Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name'       => ['required', 'string', 'max:255'],
            'website'    => ['nullable', 'url', 'max:255'],
            'service_id' => ['nullable', 'exists:services,id'],
            'message'    => ['required', 'string', 'max:5000'],
        ]);

        ContactMessage::create([
            'name'       => $validated['name'],
            'website'    => $validated['website'] ?? null,
            'service_id' => $validated['service_id'] ?? null,
            'message'    => $validated['message'],

            'source'     => 'website',
            'is_read'    => false,
        ]);

        return back()->with(
            'contact_success',
            'تم إرسال رسالتك بنجاح، شكرًا لتواصلك معنا.'
        );
    }
}
