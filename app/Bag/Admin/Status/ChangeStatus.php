<?php

namespace App\Bag\Admin\Status;

class ChangeStatus
{
    public function statusChange($slug, $modelPath, $status)
    {
        $data = $modelPath::where('slug', $slug)->firstOrFail();
        $data->status = $status;
        $data->update();
        return $data;
    }
}
