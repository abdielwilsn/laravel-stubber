<?php

namespace Stubber\Stubber\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class MakeActionCommand extends Command
{
    protected $signature = 'make:action {name}';


    public function handle()
    {
        $name = $this->argument('name');
        $className = Str::studly($name);
        $namespace = config('stubber.namespaces.actions', 'App\\Actions');
        $path = app_path('Actions/' . $className . 'Action.php');

        if (File::exists($path)) {
            $this->error('Action already exists!');
            return;
        }

        $stubPath = base_path('stubs/action.stub');

        if (!File::exists($stubPath)) {
            $stubPath = __DIR__ . '/../../stubs/action.stub';
        }

        $stub = File::get($stubPath);

        $stub = str_replace(
            ['{{ namespace }}', '{{ class }}'],
            [$namespace, $className],
            $stub
        );

        File::ensureDirectoryExists(app_path('Actions'));
        File::put($path, $stub);

        $this->info("Action created: {$path}");

    }

}