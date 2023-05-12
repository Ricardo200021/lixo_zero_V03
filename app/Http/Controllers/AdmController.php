<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Denuncias;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdmController extends Controller
{
    function login()
    {
        return view('login');
    }

    function loginPost()
    {
        $auth = Auth::attempt([
            'email' => request('email'),
            'password' => request('senha')
        ]);

        // echo auth()->user()->password;
        if ($auth) {
            return redirect('/denuncias');
        } else {
            return redirect('/');
        }
    }

    function cadastro()
    {
        return view('cadastro');
    }

    function cadastroPost()
    {
        User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);

        return redirect('/');
    }

    function denuncias()
    {
        $dados = Denuncias::where('user_id', auth()->user()->id)->get();
        $dadosDeOutrosUsuarios = Denuncias::where('user_id', '<>', auth()->user()->id)->get();

        return view('denuncias', compact('dados', 'dadosDeOutrosUsuarios'));
    }

    function verDenuncia($id)
    {
        $denuncia = Denuncias::find($id);
        $criadorDaDenuncia = User::find($denuncia->user_id);
        return view('ver-denuncia', compact('denuncia', 'criadorDaDenuncia'));
    }

    function novaDenuncia()
    {
        return view('nova-denuncia');
    }

    function novaDenunciaPost()
    {
        $file = request()->file('selecionarFoto');
        $fileName = time() .'.'. $file->extension();
        $file->move(public_path('uploads'), $fileName);

        $create = Denuncias::create([
            'user_id' => auth()->user()->id,
            'caminho_foto' => '/uploads/'. $fileName,
            'situacao' => 'Em análise',
            'endereco' => request('endereco')
        ]);
    
        return redirect('/denuncias');
    }

    function deletarDenuncia($id)
    {
        $delete = Denuncias::where('id', $id)->delete();
        return redirect('/denuncias');
    }

    function concluirDenuncia($id)
    {
        $update = Denuncias::where('id', $id)->update([
            'situacao' => 'Concluído'
        ]);
        
        return redirect('/denuncias');
    }
}
