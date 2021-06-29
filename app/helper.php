<?php

use Illuminate\Support\Facades\URL;

function pkg_upload($id, $file)
{
    return URL::to('uploads/' . $id . '/' . $file);
}
