<?php

namespace App\Providers;

use App\Cliente;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Events\Dispatcher;
use JeroenNoten\LaravelAdminLte\Events\BuildingMenu;
use \App\Produto;



class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Dispatcher $events)
    {

    	$events->listen(BuildingMenu::class, function (BuildingMenu $event) {
		    $event->menu->add('MENU PRINCIPAL');
		    $event->menu->add([
			    'text'        => 'Atendimento',
			    'url'         => 'atendimentos',
			    'icon'        => 'briefcase',
			    'label'       => 1,
			    'label_color' => 'success',

		    ],[
			    'text'        => 'Clientes',
			    'url'         => 'clientes',
			      'icon'        => 'user',
			    'label'       => Cliente::count(),
			    'label_color' => 'success',

		    ],[
			    'text'        => 'Produtos',
			    'url'         => 'produtos',
			    'icon'        => 'database',
		    ],[
			    'text'        => 'Orçamento',
			    'url'         => 'orcamentos',
			    'icon'        => 'handshake-o',
		    ],[
			    'text'        => 'Vendas',
			    'url'         => 'vendas',
			    'icon'        => 'money',
		    ]);
		    $event->menu->add('RELATÓRIOS');
		    $event->menu->add([
			    'text'        => 'Caixa',
			    'url'         => 'caixa',
			    'icon'        => 'money',

		    ],[
			    'text'        => 'Estoque',
			    'url'         => 'estoque',
			    'icon'        => 'database',
			    'label'       => Produto::count(),
			    'label_color' => 'success',
		    ]);

	    });
    }
}
