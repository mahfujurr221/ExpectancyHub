<?php
use App\Models\Setting;
use App\Models\Headline;

function setting()
{
    $setting = Setting::first();
    return $setting;
}

function headline()
{
    $headline = Headline::orderBy('id', 'desc')->where('status', 1)->get()->toArray();
    $data = [];
    foreach ($headline as $key => $value) {
        $data[$key] = $value['name'];
    }
    //array to string
    $data = implode(' | ', $data);
    // dd($data);
    return $data;
}
