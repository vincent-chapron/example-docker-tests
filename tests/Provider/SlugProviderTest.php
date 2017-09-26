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
        $slug = $this->slugProvider->slugify('This is my super title !', '-');
        $this->assertSame('this-is-my-super-title', $slug);
    }

}
