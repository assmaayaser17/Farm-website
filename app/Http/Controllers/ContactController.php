<?php
namespace App\Http\Controllers;

use App\Models\Contact;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function submit(Request $request)
    {
        // تحقق من البيانات
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
        ]);

        // حفظ البيانات في قاعدة البيانات
        Contact::create($validated);

        // إرسال الإيميل
        Mail::to('assmaayaser176@gmail.com')->send(new ContactFormMail($validated));

        // رجوع برسالة نجاح
        return back()->with('success', 'Your message has been sent and saved successfully!');
    }
}

