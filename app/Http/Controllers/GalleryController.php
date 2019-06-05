<?php

namespace App\Http\Controllers;

use App\Models\Gallery\Cat;
use App\Models\Gallery\Image;
use App\Models\Gallery\Image_cat;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function image_store(Request $request)
    {
        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/gallery/'), $fileName);
        $image=Image::query()->create([
            'image' => $fileName,
            'article1_am' => $request->article1_am,
            'article1_ru' => $request->article1_ru,
            'article1_en' => $request->article1_en,
            'article2_am' => $request->article2_am,
            'article2_ru' => $request->article2_ru,
            'article2_en' => $request->article2_en,
        ]);
        foreach ($request->image_cats as $image_cat) {
            Image_cat::query()->create([
                'cat_id' => $image_cat,
                'image_id' => $image->id,
            ]);
        }
        return redirect()->action('AdminController@gallery');

    }
    public function image_update(Request $request)
    {$up = Image::query()->find($request['id']);
        $image = Image::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/gallery/' . $image->image));
            } catch (\Exception $e) {
            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/gallery/'), $fileName);
            Image::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Image::query()->find($request->id)->update([
            'article1_am' => $request->article1_am,
            'article1_ru' => $request->article1_ru,
            'article1_en' => $request->article1_en,
            'article2_am' => $request->article2_am,
            'article2_ru' => $request->article2_ru,
            'article2_en' => $request->article2_en,

        ]);
        if (isset($request['image_categories'])) {
            foreach ($request->image_categories as $image_category) {
                Image_cat::query()->create([
                    'cat_id' => $image_category,
                    'image_id' => $up->id,
                ]);
            }
        }

        return back();
    }
    public function image_destroy(Request $request)
    {$work=Image::query()->find($request['id']);
        $work->cats()->detach();
        try {
            unlink(public_path('image/gallery/' . $work->image));
        } catch (\Exception $e) {

        }
        Image::query()->find($request['id'])->delete();
        return redirect()->action('AdminController@gallery');
    }
    public function ic_destroy( $id1,$id2)
    {
        $image=Image::query()->find($id1);
        $image->cats()->detach($id2);
        return back();
    }
    public function cat_store(Request $request)
    {
        Cat::query()->create([
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en
        ]);
        return redirect()->action('AdminController@gallery');
    }
    public function cat_update(Request $request)
    {

        Cat::query()->find($request->id)->update([
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en
        ]);
        return back();
    }
    public function cat_destroy(Request $request)
    {$category=Cat::query()->find($request['id']);
        $category->images()->detach();
        Cat::query()->find($request['id'])->delete();
        return back();
    }
}
