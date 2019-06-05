<?php

namespace App\Http\Controllers;

use App\Models\Services\Services;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function services_store(Request $request)
    {


        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/services/'), $fileName);

        Services::query()->create([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
            'article_en' => $request->article_en,
            'article_ru' => $request->article_ru,
            'article_am' => $request->article_am,
            'image' => $fileName,
        ]);



        return redirect()->action('AdminController@services');
    }

    public function services_update(Request $request)
    {

        $client = Services::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/services/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/services/'), $fileName);
            Services::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Services::query()->find($request->id)->update([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
            'article_en' => $request->article_en,
            'article_ru' => $request->article_ru,
            'article_am' => $request->article_am,
        ]);

        return back();
    }

    public function services_destroy(Request $request)
    {
        $client = Services::query()->find($request['id']);

        Services::query()->find($request->id)->delete();
        try {
            unlink(public_path('image/services/' . $client->image));
        } catch (\Exception $e) {

        }
        return redirect()->action('AdminController@services');
    }
}
