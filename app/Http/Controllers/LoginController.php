<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


//Models
use App\Models\User;

class LoginController extends Controller
{
    public function index(){
        // Si ya está autenticado, redirigir al dashboard
        if (Auth::check()) {
            return redirect('/dashboard');
        }
        return view('components/login');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'usuario' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($credentials)) {
            // Obtener el usuario autenticado
            $user = Auth::user();
            $request->session()->regenerate();
            
            // Guardar variables en la session
            session(['user_id' => $user->id]);
            session(['user_name' => $user->name]);
            session(['company_id' => $user->company_id]);

            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'usuario' => 'Las credenciales no son correctas.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }



    //
    public function createUser(Request $request){
        $request->validate([
            'name' => 'required|string|max:150',
            'usuario' => 'required|string|max:150',
            'password' => 'required|string|min:5|max:150'
        ]);

        // Si pasa la validación, crea el usuario
        $user = User::create([
            'name' => $request->name,
            'usuario' => $request->usuario,
            'password' => Hash::make($request->password), // Encripta la contraseña
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return response()->json(['message' => 'Usuario creado con éxito', 'user' => $user], 201);
    }
}
