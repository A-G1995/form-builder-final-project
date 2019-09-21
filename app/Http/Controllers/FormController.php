<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Form;
// use App\Response;
use App\User;
use Auth;
use Response;
use Redirect;

class FormController extends Controller
{
   
    public function __construct()
    {
        }

    public function index()
    {
        $user = Auth::user();
        return view('form', compact('user'));
    }

    public function create(Request $request)
    {

        $body = $request->all();
        $formData = $body['form_data'];
        $userId = $body['user_id'];

        $form = new Form;
        $form->user_id = $userId;
        $form->form = $formData;
        $form->save();

        return Response::json(['status' => true, 'id' => $form->id], 200);
    }

    public function show(Request $request)
    {
        $formId = $request->route()->parameters['id'];
        $form = Form::find($formId);
        if (empty($form)) {
            abort(404);
        }
        $user = User::find($form->user_id);
        return view('render_form', ['formId' => $form->id, 'formData' => $form->form, 'user' => $user]);
    }
}
