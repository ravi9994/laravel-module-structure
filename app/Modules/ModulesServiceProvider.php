<?php namespace App\Modules;

/**
 * ModuleServiceProvider
 *
 * @author Ravi Gaudani <ravi.b.gaudani@gmail.com>
 * @package App\Modules
 *
 */
class ModulesServiceProvider extends \Illuminate\Support\ServiceProvider {
    public function boot() {
        $modules = config("module.modules");
 
        while (list(,$module) = each($modules)) {
            // Loading routes
            if(file_exists(__DIR__.'/'.$module.'/routes.php')) {
                include __DIR__.'/'.$module.'/routes.php';
            }
            // Loading views
            if(is_dir(__DIR__.'/'.$module.'/Views')) {
                $this->loadViewsFrom(__DIR__.'/'.$module.'/Views', $module);
            }
        }
    }
    public function register() {}
}