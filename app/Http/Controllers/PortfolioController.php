<?php

namespace App\Http\Controllers;

use App\Models\Portfolio\Category;
use App\Models\Portfolio\Work;
use App\Models\Portfolio\Work_Category;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function work_store(Request $request)
    {
        $avatar = $request['image'];
        $extension = $avatar->getClientOriginalExtension();
        $fileName = time() . '.' . $extension;
        $avatar->move(public_path('image/works/'), $fileName);
        $work=Work::query()->create([
            'image' => $fileName,
            'article1_am' => $request->article1_am,
            'article1_ru' => $request->article1_ru,
            'article1_en' => $request->article1_en,
            'article2_am' => $request->article2_am,
            'article2_ru' => $request->article2_ru,
            'article2_en' => $request->article2_en,
            'link' => $request->link,
        ]);
        foreach ($request->work_categories as $work_category) {
            Work_Category::query()->create([
                'category_id' => $work_category,
                'work_id' => $work->id,
            ]);
        }
        return redirect()->action('AdminController@portfolio');

    }
    public function work_update(Request $request)
    {$up = Work::query()->find($request['id']);
        $image = Work::query()->find($request['id']);
        if (isset($request['image'])) {
            try {
                unlink(public_path('image/works/' . $image->image));
            } catch (\Exception $e) {
            }

            $avatar = $request['image'];
            $extension = $avatar->getClientOriginalExtension();
            $fileName = time() . '.' . $extension;
            $avatar->move(public_path('image/works/'), $fileName);
            Work::query()->find($request['id'])->update([
                'image' => $fileName
            ]);

        }

        Work::query()->find($request->id)->update([
            'article1_am' => $request->article1_am,
            'article1_ru' => $request->article1_ru,
            'article1_en' => $request->article1_en,
            'article2_am' => $request->article2_am,
            'article2_ru' => $request->article2_ru,
            'article2_en' => $request->article2_en,
            'link' => $request->link,
        ]);
        if (isset($request['work_categories'])) {
            foreach ($request->work_categories as $work_category) {
                Work_Category::query()->create([
                    'category_id' => $work_category,
                    'work_id' => $up->id,
                ]);
            }
        }

        return back();
    }
    public function work_destroy(Request $request)
    {$work=Work::query()->find($request['id']);
        try {
            unlink(public_path('image/works/' . $work->image));
        } catch (\Exception $e) {

        }
        $work->categories()->detach();
        Work::query()->find($request['id'])->delete();
        return redirect()->action('AdminController@portfolio');
    }
    public function wc_destroy( $id1,$id2)
    {
        $work=Work::query()->find($id1);
        $work->categories()->detach($id2);
        return back();
    }
    public function category_store(Request $request)
    {
        Category::query()->create([
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en
        ]);
        return redirect()->action('AdminController@portfolio');
    }
    public function category_update(Request $request)
    {

        Category::query()->find($request->id)->update([
            'name_am' => $request->name_am,
            'name_ru' => $request->name_ru,
            'name_en' => $request->name_en
        ]);
        return back();
    }
    public function category_destroy(Request $request)
    {$category=Category::query()->find($request['id']);
        $category->works()->detach();
        Category::query()->find($request['id'])->delete();
        return back();
    }
}
