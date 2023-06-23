<?php

namespace App\Http\Controllers;

//use App\Models\usertouh;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Models\Usertouh;

class users extends Controller
{
    /**
     * Display a listing of the resource.
     */
//   /*   public function index(request $req)
//     {
        
//         /* $users = User::all();
//         $users->nom=$req->nom;
//         $users->nom=$req->prenom;
//         $users->nom=$req->login;
//         $users->nom=$req->contact;
//         $users->nom=$req->image;
//         $users->nom=$req->sexe;
//         $users->nom=$req->email;
//         $users->nom=$req->password;      */   

//         $response = Http::get('https://jsonplaceholder.typicode.com/users');

//         if ($response->successful()) {
//             $users = $response->json();
//             dump($users); // Affiche les données récupérées pour vérification
//             return view('welcome', ['users'=>$users,]);
//         } else {
//             // Gérez les erreurs de la requête
//             // Par exemple, vous pouvez afficher le message d'erreur
//             echo $response->body();
//         }
       
//     } */
    public function add(request $req)
        {
                $users=new Users;
                $users->nom=$req->nom;
                $users->nom=$req->prenom;
                $users->nom=$req->login;
                $users->nom=$req->contact;
                $users->nom=$req->image;
                $users->nom=$req->sexe;
                $users->nom=$req->email;
                 $users->nom=$req->password; 
                 $users->save();
            return response()->json($users);
         
        }
   
}
