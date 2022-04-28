<?php

namespace App\Http\Controllers;

use App\Services\PhoneSearch;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function index()
    {
        return view('landing')->with('title', 'Ciberseguridad, Blockchain e Innovación');
    }

    public function tools()
    {
        return view('tools');
    }

    public function operator()
    {
        return view('tools.operator')->with('socialHeader', '
            <meta property="og:title" content="DLTCode">
            <meta property="og:image" content="' . asset('img/operator.jpeg') . '">
            <meta property="og:description" content="De qué operador es un número de teléfono móvil. La búsqueda por operador es la mejor manera de encontrar el operador del número de teléfono. El proceso de análisis de los números de teléfono es muy simple y en nuestra web gratuito y permite conocer a qué operador corresponde un número de teléfono.">
            ');
    }


    public function operatorSearch(Request $request, PhoneSearch $phoneSearch)
    {
        $phone = $request->phone;
        if (!preg_match("/^\+(?:[0-9] ?){6,14}[0-9]$/", $phone)) {
            return view('tools.operator')->with($request->all() + ['error' => 'El número de teléfono no es válido, debe contener el código de internacional. <br><br> Ej: +34 123 123 123']);
        }

        \Log::info("SEARCHING {$phone}");

        try {
            $data = $phoneSearch->search($phone);
            \Log::info("SEARCH RESPONSE", is_array($data) ? $data : [$data]);

            return view('tools.operator')->with($request->all() + ['data' => $data]);
        } catch (\Exception $e) {
            \Log::error($e);
            return view('tools.operator')->with($request->all() + ['error' => 'Temporalmente fuera de servicio. Intentelo de nuevo más tarde.']);
        }
    }

    public function policy()
    {
        return $this->getPolicyResponse('privacidad');

    }

    public function cookies()
    {
        return $this->getPolicyResponse('cookies');
    }

    private function getPolicyResponse($policy)
    {
        $response = redirect()->back()->with(['error' => 'El enlace que estás intentando acceder no existe.']);
        $path = base_path("politica-{$policy}.txt");

        if (file_exists($path) && is_file($path)) {

            $content = file_get_contents($path);
            $content = str_replace("\n", '<p>', $content);

            $content = str_replace(PHP_EOL, '<p>', $content);

            $response = view('policy')->with([
                'policy' => $policy,
                'content' => $content,
            ]);
        } else {
            abort(404);
        }


        return $response;
    }
}
