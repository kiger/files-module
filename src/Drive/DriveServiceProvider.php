<?php namespace Anomaly\FilesModule\Drive;

use Illuminate\Support\ServiceProvider;

/**
 * Class DriveServiceProvider
 *
 * @link          http://anomaly.is/streams-platform
 * @author        AnomalyLabs, Inc. <hello@anomaly.is>
 * @author        Ryan Thompson <ryan@anomaly.is>
 * @package       Anomaly\FilesModule\Drive
 */
class DriveServiceProvider extends ServiceProvider
{

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'Anomaly\FilesModule\Drive\DriveModel',
            'Anomaly\FilesModule\Drive\DriveModel'
        );
        
        $this->app->bind(
            'Anomaly\FilesModule\Drive\Contract\DriveRepositoryInterface',
            'Anomaly\FilesModule\Drive\DriveRepository'
        );

        $this->app->register('Anomaly\FilesModule\Drive\DriveRouteProvider');
    }
}