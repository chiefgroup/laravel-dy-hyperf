<?php

namespace ChiefGroup\LaravelDy;

use Hyperf\Jet\ClientFactory;
use Hyperf\Jet\DataFormatter\DataFormatter;
use Hyperf\Jet\Packer\JsonEofPacker;
use Hyperf\Jet\Packer\JsonLengthPacker;
use Hyperf\Jet\PathGenerator\PathGenerator;
use Hyperf\Jet\ProtocolManager;
use Hyperf\Jet\ServiceManager;
use Hyperf\Jet\Transporter\GuzzleHttpTransporter;
use Hyperf\Jet\Transporter\StreamSocketTransporter;
use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

/**
 * Class ServiceProvider.
 *
 */
class ServiceProvider extends LaravelServiceProvider implements DeferrableProvider
{
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/qf_dy.php' => config_path('qf_dy.php')
        ], 'config');
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //注册协议
        ProtocolManager::register($protocol = 'jsonrpc-tcp-length-check', [
            ProtocolManager::TRANSPORTER    => new StreamSocketTransporter(),
            ProtocolManager::PACKER         => new JsonLengthPacker(),
            ProtocolManager::PATH_GENERATOR => new PathGenerator(),
            ProtocolManager::DATA_FORMATTER => new DataFormatter(),
        ]);

        $clientFactory = new ClientFactory();

        $this->app->singleton('BannerService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'BannerService', $protocol = 'jsonrpc-tcp-length-check', [
                ServiceManager::NODES => [
                    [$host = config('qf_dy.node.host'), $port = config('qf_dy.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'BannerService', $protocol = 'jsonrpc-tcp-length-check');
        });

        $this->app->singleton('EsignService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'EsignService', $protocol = 'jsonrpc-tcp-length-check', [
                ServiceManager::NODES => [
                    [$host = config('qf_dy.node.host'), $port = config('qf_dy.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'EsignService', $protocol = 'jsonrpc-tcp-length-check');
        });

        $this->app->singleton('ProjectService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'ProjectService', $protocol = 'jsonrpc-tcp-length-check', [
                ServiceManager::NODES => [
                    [$host = config('qf_dy.node.host'), $port = config('qf_dy.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'ProjectService', $protocol = 'jsonrpc-tcp-length-check');
        });

        $this->app->singleton('ContractService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'ContractService', $protocol = 'jsonrpc-tcp-length-check', [
                ServiceManager::NODES => [
                    [$host = config('qf_dy.node.host'), $port = config('qf_dy.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'ContractService', $protocol = 'jsonrpc-tcp-length-check');
        });

        $this->app->singleton('AccountService', function ($app) use ($clientFactory) {
            ServiceManager::register($service = 'AccountService', $protocol = 'jsonrpc-tcp-length-check', [
                ServiceManager::NODES => [
                    [$host = config('qf_dy.node.host'), $port = config('qf_dy.node.port')],
                ],
            ]);

            return $clientFactory->create($service = 'AccountService', $protocol = 'jsonrpc-tcp-length-check');
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            'AccountService',
            'ContractService',
            'ProjectService',
            'EsignService',
            'BannerService'
        ];
    }

}