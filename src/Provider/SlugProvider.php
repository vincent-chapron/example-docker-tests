<?php

namespace App\Provider;

class SlugProvider {

    public function slugify($name) {
        $slug = preg_replace('/[^\w]+/', '-', $name);
        $slug = strtolower(trim($slug, '-'));
        return $slug;
    }

}
