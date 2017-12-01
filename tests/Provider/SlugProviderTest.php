<?php

namespace Tests\Provider;

use App\Provider\SlugProvider;
use PHPUnit\Framework\TestCase;

class SlugProviderTest extends TestCase{

    protected $slugProvider;

    protected function setUp() {
        $this->slugProvider = new SlugProvider();
    }

    public function testSlugify() {
        $slug = $this->slugProvider->slugify('This is my super title !');
        $this->assertSame('this-is-my-super-title', $slug);
    }
    
    public function testSlugifyWithPrefix() {
        $slug = $this->slugProvider->slugify('This is my super title !', '_', 'sogeti');
        $this->assertSame('sogeti_this_is_my_super_title', $slug);
    }

}
