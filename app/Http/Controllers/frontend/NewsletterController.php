<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Newsletter;
use Illuminate\Http\Request;

class NewsletterController extends Controller
{
    public function index(Request $request)

    {
        $model = new Newsletter();

        $rules =
            [
                'email'=>'required|unique:newsletters',

            ];

        $error_sms =
            [
                'email.required' => 'الرجاء ادخال بريد صالح الخبر ',

            ];

        $data = validator()->make($request->all(), $rules, $error_sms);

        if ($data->fails()) {
            return back()->withInput()->withErrors($data->errors());
        }

        $record = $model->create($request->all());
        session()->flash('success', 'تمت الاضافة بنجاح');
        return back();

    }
}
