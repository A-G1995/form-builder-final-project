<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
use App\User;
use App\Response;
use Auth;
use Response as R;
use Redirect;

class ResponseController extends Controller
{
    
    public function __construct()
    {
     }


    public function index()
    {
    }

    public function show(Request $request)
    {
        $formId = $request->route()->parameters['id'];
        $form = Form::find($formId);
        if (empty($form)) {
            abort(404);
        }
        $user = User::find($form->user_id);
        return view('render_form', ['formData' => $form->form, 'user' => $user, 'formId' => $formId]);
    }

    public function store(Request $request)
    {
        $body = $request->all();
        $formId = $request->route()->parameters['id'];

        $response = new Response;
        $response->form_id = $formId;
        $response->response = $body['user_data'];
        $response->save();

        return R::json(['status' => true]);
    }
}
