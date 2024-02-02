<?php

namespace App\Services;
use Illuminate\Support\Str;

use App\Models\Photo;
use App\Models\Aventure;


/**
 * Class ImageService.
 */
class ImageService
{
    public function store($images, Aventure $aventure)
    {
        foreach ($images as $image) {
            $imageName = $this->moveImage($image);
            Photo::create([
                "image" => $imageName,
                "aventure_id" => $aventure->id
            ]);
        }
    }

    public function moveImage($image)
    {
        $imageName = Str::random(10) . time() . "." . $image->extension();
        $image->move(public_path('images/storage'), $imageName);
        return $imageName;
    }
}