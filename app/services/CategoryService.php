<?php

namespace App\Services;


use Illuminate\Support\Str;

class CategoryService
{


    public function store(object $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $file_name = $file->getClientOriginalName();
            $destinationPath = 'category_image';
            $file->move($destinationPath, $file_name);
            $data['image'] = $file_name;
        }

        return $data;
    }
    public function update(object $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name, '-');
        if ($request->hasFile('image')) {
        }

        return $data;
    }
}
