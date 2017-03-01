<?php namespace Doitonlinemedia\Pages\Providers;

use Doitonlinemedia\Admin\App\Services\PackageService;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class PagesServiceProvider extends ServiceProvider
{
    private $publishPath = 'vendor/doitonlinemedia/pages';

    private $namespace = 'Doitonlinemedia\Pages\App\Http\Controllers';

    public function boot()
    {

    }

    public function register()
    {
        Route::middleware('web')->namespace($this->namespace)->group(__DIR__.'/../routes/web.php');

        $this->publishes([
            __DIR__.'/../../resources/assets' => public_path($this->publishPath),
        ], 'public');

        $packageService = new PackageService(__DIR__);
        Artisan::command('doitonlinemedia:pages:install', function () use($packageService) {
            $dataFile = __DIR__ . '/../data.json';
            $composerFile = __DIR__ . '/../../composer.json';
            if(File::exists($dataFile)) {
                $data = json_decode(File::get($dataFile));
                if(File::exists($composerFile)) {
                    $composer = json_decode(File::get($composerFile));
                    $data->{'composer'} = $composer->name;
                }
                $packageService->install('pages', $data, $this);
            }
        });

        $packageService->addMenu('pages', 'Pages', '#');
        $packageService->addMenuItem('pages', 'Page', 'add/page');
    }
}