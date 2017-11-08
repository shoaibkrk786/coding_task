<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User,
    Auth,
    Hash;
use Validator;
use App\Question;
use App\Questionair;

class TestController extends Controller
{
    public function index(){
        return view('layout.layout');
    }
    public function reg(){
        return view('pages.registration');
    }
    public function log(){
        return view('pages.login');
    }
    public function result(){
        $user =Auth::User();
        $ques = $user->questionair;
        return view('pages.result',compact('ques'));
    }
    public function questionair(){
        return view('questions.index');
    }
    public  function question($id){

        return view('questions.create',compact('id'));
    }
    public function userstore(Request $request){
        $data = $request->input();
        $email['email'] = $data['email'];
        $rule_email = array('email' => 'unique:users,email');
        $validator_email = Validator::make($email, $rule_email);
        if ($validator_email->fails()) {
            $message = '[Email] already exists';
            return $message;
        } else {
            $pass = $data['password'];
            $data['password'] = Hash::make($pass);

            $id = User::create($data);

        }
        Auth::login($id);

        return redirect(route('questionairs')) ;
    }
    public function login_user(Request $request){
        $data = $request->input();
        $user = User::where("email", $data['email'])
            ->first();
        if (!is_null($user)) {
            if (Hash::check($data['password'], $user->password)) {
                Auth::login($user);
            }

            return redirect(route('questionairs') );
        } else {
            return redirect(route('registration'));
        }
    }
    public function logout() {
        Auth::logout();
        return redirect('/');
    }
    public function storequestionair(Request $request){
        $data = $request->input();
        $user =Auth::User();
        $data['user_id'] = $user->id;
        $data['duration'] = $data['duration'].$data['time'];

        $ques = Questionair::create($data);
        $id=$ques->id;
          return redirect('/questionairs/create/'.$id);
    }
    public function storequestion(Request $request)
    {

        $input = $request->except('_token');
        $id = $input['questionair_id'];

        for ($i = 0; $i < count($input['question']); $i++) {

            $data = [
                'questionair_id' => $id,
                'type' => $input['type'][$i],
                'question' => $input['question'][$i],
                'anser' => $input['anser'][$i],
                'choice_1' => $input['choice_1'][$i],
                'choice_2' => $input['choice_2'][$i],
                'choice_3' => $input['choice_3'][$i],
            ];
            Question::create($data);
        }
        return redirect(route('questionairs'));


    }
    public function delete($id){

        $del=Questionair::find($id);
        $del->delete();
         Question::where('questionair_id',$id)->delete();
        return redirect(route('questionairs'));
    }
}
