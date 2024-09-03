<?php

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Eloquent\Model;

beforeEach(function () {
    Model::unsetEventDispatcher();
});

it('belongs to a project', function () {
    $followup = Category::factory()->create();
    // Post::factory()->create();

    // expect($followup->posts)->toBeInstanceOf(Post::class);
});
