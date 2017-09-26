<?php

use App\Provider\SlugProvider;

require __DIR__.'/../vendor/autoload.php';

$slugProvider = new SlugProvider();
$slug = $slugProvider->slugify('This is my super title !');
echo "SLUG = $slug\n";
