<?php

namespace App\Http\Controllers;

use App\Models\Pictures;
use App\Models\Text;
use Illuminate\Http\Request;

class PictureController extends Controller
{
    public function picture_store(Request $request)
    {
        $avatar = $request['picture'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/pictures/'), $fileName);
        Pictures::query()->create([
            'picture' => $fileName,
        ]);

        return back();

    }
    public function picture_update(Request $request)
    {

        $picture = Pictures::query()->find($request['id']);
        if (isset($request['picture'])) {
            try {
                unlink(public_path('image/pictures/' . $picture->picture));
            } catch (\Exception $e) {

            }

            $avatar = $request['picture'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/pictures/'), $fileName);
            Pictures::query()->find($request['id'])->update([
                'picture' => $fileName
            ]);

        }
        return back();
    }

    public function text_store(Request $request)
    {
        Text::query()->create([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
        ]);



        return back();
    }

    public function text_update(Request $request)
    {
        Text::query()->find($request->id)->update([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
        ]);

        return back();
    }

}
