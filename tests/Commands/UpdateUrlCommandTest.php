<?php namespace Tests\Commands;

use BookStack\Entities\Models\Page;
use Symfony\Component\Console\Exception\RuntimeException;
use Tests\TestCase;

class UpdateUrlCommandTest extends TestCase
{
    public function test_update_url_command_updates_page_content()
    {
        $page = Page::query()->first();
        $page->html = '<a href="https://example.com/donkeys"></a>';
        $page->save();

        $this->artisan('bookstack:update-url https://example.com https://cats.example.com')
            ->expectsQuestion("This will search for \"https://example.com\" in your database and replace it with  \"https://cats.example.com\".\nAre you sure you want to proceed?", 'y')
            ->expectsQuestion("This operation could cause issues if used incorrectly. Have you made a backup of your existing database?", 'y');

        $this->assertDatabaseHas('pages', [
            'id' => $page->id,
            'html' => '<a href="https://cats.example.com/donkeys"></a>'
        ]);
    }

    public function test_update_url_command_requires_valid_url()
    {
        $badUrlMessage = "The given urls are expected to be full urls starting with http:// or https://";
        $this->artisan('bookstack:update-url //example.com https://cats.example.com')->expectsOutput($badUrlMessage);
        $this->artisan('bookstack:update-url https://example.com htts://cats.example.com')->expectsOutput($badUrlMessage);
        $this->artisan('bookstack:update-url example.com https://cats.example.com')->expectsOutput($badUrlMessage);

        $this->expectException(RuntimeException::class);
        $this->artisan('bookstack:update-url https://cats.example.com');
    }

    public function test_update_url_command_updates_settings()
    {
        setting()->put('my-custom-item', 'https://example.com/donkey/cat');
        $this->artisan('bookstack:update-url https://example.com https://cats.example.com')
            ->expectsQuestion("This will search for \"https://example.com\" in your database and replace it with  \"https://cats.example.com\".\nAre you sure you want to proceed?", 'y')
            ->expectsQuestion("This operation could cause issues if used incorrectly. Have you made a backup of your existing database?", 'y');

        $settingVal = setting('my-custom-item');
        $this->assertEquals('https://cats.example.com/donkey/cat', $settingVal);
    }
}