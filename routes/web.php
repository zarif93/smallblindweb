<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Telegram\Bot\Laravel\Facades\Telegram;

Route::get('/', function () {
    return view('small');
});

Route::post('/content', function (Request $request) {
    $validator = Validator::make($request->all(), [
        'name' => 'required|string',
        'number' => 'required|digits:10',
    ], [
        'name.required' => 'יש להזין שם',
        'number.required' => 'יש להזין מספר טלפון',
        'number.digits' => 'מספר טלפון חייב להיות 10 ספרות בדיוק',
    ]);

    if ($validator->fails()) {
        return redirect('/#contact')
            ->withErrors($validator)
            ->withInput();
    }else {
        $validated = $validator->validated();

        $number = trim($validated['number']);
        $waLink = "https://wa.me/972{$number}";

        $text = "ליד חדש נכנס \n  \nשם: {$validated['name']}\nמספר: {$validated['number']}\nקישור לווצאפ: {$waLink}";

        $response = Telegram::sendMessage([
            'chat_id' => '7006367573', // מזהה של משתמש או קבוצה
            'text' => $text
        ]);

        $response->getMessageId();

    // כאן הכל תקין! 
    // לדוגמה, אפשר להחזיר הודעה או להמשיך בעיבוד
    return redirect('/#contact')->with('success', 'הטופס נשלח בהצלחה!');
}

    //$response = Telegram::bot('mybot')->getMe();

    // במקרה של הצלחה
    //return redirect('/#contact-form')->with('success', 'הטופס נשלח בהצלחה');
});
