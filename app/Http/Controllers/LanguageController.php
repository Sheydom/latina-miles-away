<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLanguage(Request $request, $locale)
    {
        if (! in_array($locale, ['en', 'es'])) {
            $locale = 'en';
        }

        session(['locale' => $locale]);

        // Redirect to current page
        $redirect = $request->query('redirect');

        if ($redirect) {
            return redirect()->to($redirect);
        }

        return redirect('/');
    }
}
