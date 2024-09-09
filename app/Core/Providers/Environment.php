<?php

namespace Leantime\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Leantime\Core\Bootstrap\HandleExceptions;
use Leantime\Core\Events\DispatchesEvents;
use Leantime\Core\Http\IncomingRequest;
use Symfony\Component\ErrorHandler\Debug;

class Environment extends ServiceProvider
{

    Use DispatchesEvents;

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(\Leantime\Core\Configuration\AppSettings::class, \Leantime\Core\Configuration\AppSettings::class);
        $this->app->singleton(\Leantime\Core\Configuration\Environment::class, \Leantime\Core\Configuration\Environment::class);

    }

    public function boot() {


        /*
        $config = $this->app->make(\Leantime\Core\Configuration\Environment::class);

        if (empty(config("env"))) {
            config(["env" => 'production']);
        }

        if($config->debug) {

            Debug::enable();
            config(['debug' => true]);
            config(['debug_blacklist' => [
                '_ENV' => [
                    'LEAN_EMAIL_SMTP_PASSWORD',
                    'LEAN_DB_PASSWORD',
                    'LEAN_SESSION_PASSWORD',
                    'LEAN_OIDC_CLIEND_SECRET',
                    'LEAN_S3_SECRET',
                ],

                '_SERVER' => [
                    'LEAN_EMAIL_SMTP_PASSWORD',
                    'LEAN_DB_PASSWORD',
                    'LEAN_SESSION_PASSWORD',
                    'LEAN_OIDC_CLIEND_SECRET',
                    'LEAN_S3_SECRET',
                ],
                '_POST' => [
                    'password',
                ],
            ]]);
        }

        $exceptionsHandler = $this->app->make(HandleExceptions::class);
        $exceptionsHandler->bootstrap($this->app);


        self::dispatch_event('config_initialized');
        */
    }

}
