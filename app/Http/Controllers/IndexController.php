<?php

namespace App\Http\Controllers;

use App\Models\Main\Our_partners;
use App\Models\Main\Slider;
use App\Models\Main\Team;
use App\Models\Main\Years_of_exp;
use Illuminate\Http\Request;


class IndexController extends Controller
{
    public function main_slide_store(Request $request)
    {


        $avatar = $request['slide_image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/slide/'), $fileName);

        Slider::query()->create([
            'title_en' => $request->slide_title_en,
            'title_ru' => $request->slide_title_ru,
            'title_am' => $request->slide_title_am,
            'article_en' => $request->slide_article_en,
            'article_ru' => $request->slide_article_ru,
            'article_am' => $request->slide_article_am,
            'image' => $fileName,
        ]);



        return redirect()->action('AdminController@index');
    }

    public function main_slide_update(Request $request)
    {

        $client = Slider::query()->find($request['id']);
        if (isset($request['slide_image'])) {
            try {
                unlink(public_path('image/slide/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['slide_image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/slide/'), $fileName);
            Slider::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Slider::query()->find($request->id)->update([
            'title_en' => $request->slide_title_en,
            'title_ru' => $request->slide_title_ru,
            'title_am' => $request->slide_title_am,
            'article_en' => $request->slide_article_en,
            'article_ru' => $request->slide_article_ru,
            'article_am' => $request->slide_article_am,
        ]);

        return back();
    }

    public function main_slide_destroy(Request $request)
    {
        $client = Slider::query()->find($request['id']);

        try {
            unlink(public_path('image/slide/' . $client->image));
        } catch (\Exception $e) {

        }
        Slider::query()->find($request->id)->delete();

        return redirect()->action('AdminController@index');
    }

    public function year_update(Request $request)
    {

        Years_of_exp::query()->find($request->id)->update([
            'title_en' => $request->title_en,
            'title_ru' => $request->title_ru,
            'title_am' => $request->title_am,
            'count' => $request->count,

        ]);

        return back();
    }

    public function our_partners_store(Request $request)
    {
        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/our_partners/'), $fileName);

        Our_partners::query()->create([
            'link' => $request->link,
            'image' => $fileName,
        ]);
        return redirect()->action('AdminController@index');
    }

    public function our_partners_update(Request $request)
    {

        $client = Our_partners::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/our_partners/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/our_partners/'), $fileName);
            Our_partners::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Our_partners::query()->find($request->id)->update([
            'link' => $request->link,
        ]);

        return back();
    }

    public function our_partners_destroy($request)
    {
        $client = Our_partners::query()->find($request);

        Our_partners::query()->find($request)->delete();
        try {
            unlink(public_path('image/our_partners/' . $client->image));
        } catch (\Exception $e) {

        }
        return back();
    }

    public function team_store(Request $request)
    {


        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/team/'), $fileName);

        Team::query()->create([
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'name_am' => $request->name_am,
            'position_en' => $request->position_en,
            'position_ru' => $request->position_ru,
            'position_am' => $request->position_am,
            'image' => $fileName,
        ]);



        return redirect()->action('AdminController@index');
    }

    public function team_update(Request $request)
    {

        $client = Team::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/team/' . $client->image));
            } catch (\Exception $e) {

            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/team/'), $fileName);
            Team::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Team::query()->find($request->id)->update([
            'name_en' => $request->name_en,
            'name_ru' => $request->name_ru,
            'name_am' => $request->name_am,
            'position_en' => $request->position_en,
            'position_ru' => $request->position_ru,
            'position_am' => $request->position_am,
        ]);

        return back();
    }

    public function team_destroy(Request $request)
    {
        $client = Team::query()->find($request['id']);

        Team::query()->find($request->id)->delete();
        try {
            unlink(public_path('image/team/' . $client->image));
        } catch (\Exception $e) {

        }
        return redirect()->action('AdminController@index');
    }
}
