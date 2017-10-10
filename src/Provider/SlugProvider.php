<?php

namespace App\Provider;

class SlugProvider {

    public function slugify($name, $separator = '-') {
        $slug = preg_replace('/[^\w]+/', $separator, $name);
        $slug = strtolower(trim($slug, $separator));
        return $slug;
    }

}
