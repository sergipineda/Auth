<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
//use App\Http\Controllers\Controller;
/**
 * Class LoginController
 * @package App\Http\Controllers
 */
class LoginController extends Controller
{
    /**
     * Process a login HTTP POST
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postLogin(Request $request){
        //TODO
        //dd($request->all());
        //\Debugbar::info("Ok entra a post login");
        if($this->login($request->email,$request->password)){
            //redirect to home
            return redirect()->route('auth.home');
        }else{
            //redirect Back
            return redirect()->route('auth.login');
        }
    }
    /**
     * @param $email
     * @param $password
     * @return bool
     */
    private function login($email, $password){
        return true;
    }
    /**
     * @return \Illuminate\View\View
     */
    public function getLogin(){
        //TODO
        return view('login');
    }
}


