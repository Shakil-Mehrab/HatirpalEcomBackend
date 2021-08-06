<?php

namespace App\Bag\Admin\Delete;

class DeleteData
{
    public function dataDelete($slug, $modelPath)
    {
        $data = $modelPath::where('slug', $slug)->firstOrFail();
        $this->relatedImageCheck($data, $modelPath);
        $this->fileCheck($data);
        $data->delete();
    }

    public function relatedImageCheck($data, $modelPath)
    {
        if ($modelPath == 'App\Models\Product') {
            if (count($data->productImages)) {
                foreach ($data->productImages as $pro) {
                    $this->fileCheck($pro);
                }
            }
        }
    }
    public static function fileCheck($data)
    {
        if (file_exists($data->thumbnail)) {
            unlink($data->thumbnail);
        }
    }
}
