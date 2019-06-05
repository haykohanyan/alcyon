<?php

namespace App\Http\Controllers;

use App\Models\About\Our_clients;
use App\Models\About\Result;
use App\Models\About\Timeline;
use App\Models\About\wcu_skill;
use App\Models\About\What_people_say;
use App\Models\About\Why_choose_us;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function why_choose_use_update(Request $request)
    {

        Why_choose_us::query()->find($request->id)->update([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
            'article_en' => $request->article_en,
            'article_ru' => $request->article_ru,
            'article_am' => $request->article_am,
        ]);

        return back();
    }
    public function wcu_update(Request $request)
    {

        wcu_skill::query()->find($request->id)->update([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
            'count' => $request->count,

        ]);

        return back();
    }

    public function our_clients_store(Request $request)
{
    $avatar = $request['image'];
    $extension = $avatar->getClientOriginalExtension();
    $fileName = time() . '.' . $extension;
    $avatar->move(public_path('image/our_clients/'), $fileName);

    Our_clients::query()->create([
        'link' => $request->link,
        'image' => $fileName,
    ]);
    return redirect()->action('AdminController@about');
}

    public function our_clients_update(Request $request)
    {

        $client = Our_clients::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/our_clients/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/our_clients/'), $fileName);
            Our_clients::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Our_clients::query()->find($request->id)->update([
            'link' => $request->link,
        ]);

        return back();
    }

    public function our_clients_destroy($request)
    {
        $client = Our_clients::query()->find($request);

        Our_clients::query()->find($request)->delete();
        try {
            unlink(public_path('image/our_clients/' . $client->image));
        } catch (\Exception $e) {

        }
        return back();
    }

    public function timeline_store(Request $request)
    {
        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/timeline/'), $fileName);

        Timeline::query()->create([
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'image' => $fileName,
            'year' => $request->year,
        ]);
        return redirect()->action('AdminController@about');
    }

    public function timeline_update(Request $request)
    {

        $client = Timeline::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/timeline/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/timeline/'), $fileName);
            Timeline::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Timeline::query()->find($request->id)->update([
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'year' => $request->year,
        ]);

        return back();
    }

    public function timeline_destroy(Request $request)
    {
        $client = Timeline::query()->find($request['id']);


        try {
            unlink(public_path('image/timeline/' . $client->image));
        } catch (\Exception $e) {

        }
        Timeline::query()->find($request['id'])->delete();
        return redirect()->action('AdminController@about');
    }


    public function wps_store(Request $request)
    {
        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/wps/'), $fileName);

        What_people_say::query()->create([
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'article_am' => $request->article_am,
            'article_ru' => $request->article_ru,
            'article_en' => $request->article_en,
            'image' => $fileName,
            'from' => $request->from,
        ]);
        return redirect()->action('AdminController@about');
    }

    public function wps_update(Request $request)
    {

        $client = What_people_say::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/wps/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/wps/'), $fileName);
            What_people_say::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        What_people_say::query()->find($request->id)->update([
            'title_am' => $request->title_am,
            'title_ru' => $request->title_ru,
            'title_en' => $request->title_en,
            'article_am' => $request->article_am,
            'article_ru' => $request->article_ru,
            'article_en' => $request->article_en,
            'from' => $request->from,
        ]);

        return back();
    }

    public function wps_destroy(Request $request)
    {
        $client = What_people_say::query()->find($request['id']);


        try {
            unlink(public_path('image/wps/' . $client->image));
        } catch (\Exception $e) {

        }
        What_people_say::query()->find($request['id'])->delete();
        return redirect()->action('AdminController@about');
    }


    public function result_update(Request $request)
    {

        Result::query()->find($request->id)->update([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
            'count' => $request->count,

        ]);

        return back();
    }
}
