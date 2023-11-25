<?php
use App\Models\About;

if (! function_exists('about_image_path'))
{
   function about_image_path($path)
   {
    return  About::IMAGE_PATH . $path;
   }
}

?>
