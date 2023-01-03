<?php
namespace App\Http\Controllers;

use App\Models\BetaTester;
use Illuminate\Http\Request;

class BetaTesterController extends Controller
{
    /**
     * Register email for beta testers
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255'
        ]);
        if (BetaTester::where('email', $request->email)->first()) {
            $errors = new \Illuminate\Support\MessageBag();
            // $errors->add('email', 'Email is already on our list.');
            // return view('welcome')->withErrors($errors);
            return response("Email is already on our list.", 400);
        }
        // $betaTester = BetaTester::create($request->only('email'));
        // $betaTester = BetaTester::create($request->only('source'));
        $betaTester = new BetaTester;
        $betaTester->email = $request->email;
        $betaTester->source = $request->source;
        $betaTester->text = $request->text;
        $betaTester->save();
        
        // return view('welcome', ['success' => true]);
        return response("success", 200);
    }
}     
        