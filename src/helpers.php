<?php

if (! function_exists('module_path')) {
    function module_path($name, $path = '')
    {
        $name = ucfirst($name);
        $module = app('modules')->find($name);
        $path = $path ? DIRECTORY_SEPARATOR . $path : $path;

        if ($module instanceof \Nwidart\Modules\Module) {
            return $module->getPath() . $path;
        }

        return base_path('modules' . $path);
    }
}

if (! function_exists('config_path')) {
    /**
     * Get the configuration path.
     *
     * @param  string $path
     * @return string
     */
    function config_path($path = '')
    {
        return app()->basePath() . '/config' . ($path ? '/' . $path : $path);
    }
}

if (! function_exists('public_path')) {
    /**
     * Get the path to the public folder.
     *
     * @param  string  $path
     * @return string
     */
    function public_path($path = '')
    {
        return app()->make('path.public') . ($path ? DIRECTORY_SEPARATOR . ltrim($path, DIRECTORY_SEPARATOR) : $path);
    }
}
