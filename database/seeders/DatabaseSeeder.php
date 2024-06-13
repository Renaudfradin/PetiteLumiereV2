<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Legends;
use App\Models\Post;
use App\Models\User;
use Closure;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Seeder;
use Symfony\Component\Console\Helper\ProgressBar;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->withProgressBar(1, fn () => User::factory(1)
            ->create([
                'name' => 'Test User',
                'email' => 'test@gmail.com',
            ])
        );
        $this->command->info('Admin user created.');
        Post::factory()->count(100)->has(Legends::factory()->count(20), 'legends')->create();
        Category::factory()->count(50)->has(Post::factory()->count(10))->create();
    }

    protected function withProgressBar(int $amount, Closure $createCollectionOfOne): Collection
    {
        $progressBar = new ProgressBar($this->command->getOutput(), $amount);

        $progressBar->start();

        $items = new Collection();

        foreach (range(1, $amount) as $i) {
            $items = $items->merge(
                $createCollectionOfOne()
            );
            $progressBar->advance();
        }

        $progressBar->finish();

        $this->command->getOutput()->writeln('');

        return $items;
    }
}
