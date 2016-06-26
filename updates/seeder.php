<?php

namespace JumpLink\Slideshow\Updates;

use October\Rain\Database\Updates\Seeder as BaseSeeder;

use JumpLink\Slideshow\Models\Slideshow,
    JumpLink\Slideshow\Models\Slide;

class Seeder extends BaseSeeder
{

    public function run()
    {
        $slideshow = Slideshow::create([
            'name' => 'Example'
        ]);

        for ($i = 0; $i < 3; $i++) {
            $slide = Slide::make([
                'name' => $i,
                'description' => sprintf('Slide N°%d', $i),
                'link' => 'http://example.com/'
            ]);

            $slide->slideshow()->associate($slideshow)->save();
        }
    }

}
