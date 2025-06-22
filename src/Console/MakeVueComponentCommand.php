<?php

namespace Stubber\Stubber\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class MakeVueComponentCommand extends Command
{
    protected $signature = 'make:vue {name} {--path=resources/js/Components}';
    protected $description = 'Create a new Vue component';

    public function handle()
    {
        $name = $this->argument('name');
        $componentName = str($name)->afterLast('/')->ucfirst();
        $path = base_path($this->option('path'));
        $fullPath = $path . '/' . str($name)->finish('.vue');

        if (File::exists($fullPath)) {
            $this->error("Component {$fullPath} already exists!");
            return Command::FAILURE;
        }

        // Create directory if not exists
        File::ensureDirectoryExists(dirname($fullPath));

        // Load stub
//        if (!File::exists($stubPath)) {
//            $stubPath = __DIR__ . '/../../stubs/action.stub';
//        }
        $stub = file_get_contents(__DIR__ . '/../../stubs/vue.stub');

        // Replace placeholders
        $stub = str_replace('{{ name }}', $componentName, $stub);

        // Save file
        File::put($fullPath, $stub);

        $this->info("Vue component [{$name}] created at: {$fullPath}");

        return Command::SUCCESS;
    }
}
