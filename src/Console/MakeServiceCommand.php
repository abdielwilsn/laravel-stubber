<?php

namespace Stubber\Stubber\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeServiceCommand extends Command
{
    protected $signature = 'make:service {name}';
    protected $description = 'Generate a new service class';

    public function handle()
    {
        $name = $this->argument('name');
        $className = Str::studly($name);
        $namespace = config('stubber.namespaces.services', 'App\\Services');
        $path = app_path('Services/' . $className . 'Service.php');

        if (File::exists($path)) {
            $this->error('Service already exists!');
            return;
        }

        $stubPath = base_path('stubs/service.stub');

        if (!File::exists($stubPath)) {
            $stubPath = __DIR__ . '/../../stubs/service.stub';
        }

        $stub = File::get($stubPath); // only load after confirming the path

        $stub = str_replace(
            ['{{ namespace }}', '{{ class }}'],
            [$namespace, $className],
            $stub
        );

        File::ensureDirectoryExists(app_path('Services'));
        File::put($path, $stub);

        $this->info("Service created: {$path}");
    }
}
