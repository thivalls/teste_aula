<?php

namespace App\Providers;

use App\Actions\Jetstream\AddTeamMember;
use App\Actions\Jetstream\CreateTeam;
use App\Actions\Jetstream\DeleteTeam;
use App\Actions\Jetstream\DeleteUser;
use App\Actions\Jetstream\UpdateTeamName;
use Illuminate\Support\ServiceProvider;
use Laravel\Jetstream\Jetstream;

class JetstreamServiceProvider extends ServiceProvider
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
    public function boot()
    {
        $this->configurePermissions();

        Jetstream::createTeamsUsing(CreateTeam::class);
        Jetstream::updateTeamNamesUsing(UpdateTeamName::class);
        Jetstream::addTeamMembersUsing(AddTeamMember::class);
        Jetstream::deleteTeamsUsing(DeleteTeam::class);
        Jetstream::deleteUsersUsing(DeleteUser::class);
    }

    /**
     * Configure the roles and permissions that are available within the application.
     *
     * @return void
     */
    protected function configurePermissions()
    {
        Jetstream::defaultApiTokenPermissions(['read']);

        Jetstream::role('admin', __('Administrator'), [
            'Ver Produtos',
            'Ver Transportadoras',
            'Ver Clientes',
            'Ver Fornecedores',
            'Ver Ordens',
            'Ver Estoque',
            'Ver Categorias',
            'Cadastrar Produto',
            'Cadastrar Transportadora',
            'Cadastrar Cliente',
            'Cadastrar Fornecedor',
            'Cadastrar Ordem',
            'Cadastrar Orçamento',
            'Cadastrar Estoque',
            'Cadastrar Categorias',
            'Atualizar Produto',
            'Atualizar Transportadora',
            'Atualizar Cliente',
            'Atualizar Fornecedor',
            'Atualizar Ordem',
            'Atualizar Orçamento',
            'Atualizar Estoque',
            'Atualizar Categorias',
            'Remover Produto',
            'Remover Transportadora',
            'Remover Cliente',
            'Remover Fornecedor',
            'Remover Ordem',
            'Remover Orçamento',
            'Remover Estoque',
            'Remover Categorias',
            'Acesso Financeiro',
            'Geração de Relatórios'
        ])->description(__('Administrator users can perform any action.'));

        Jetstream::role('sales', __('Vendas'), [
            'Ver Produtos',
            'Ver Transportadoras',
            'Ver Clientes',
            'Ver Fornecedores',
            'Ver Ordens',
            'Ver Estoque',
            'Ver Categorias',
            'Cadastrar Ordem',
            'Cadastrar Orçamento',
            'Cadastrar Transportadora',
            'Cadastrar Cliente',
            // 'Remover Ordem',
            // 'Remover Orçamento',
            'Atualizar Ordem',
            'Atualizar Orçamento',
        ])->description(__('Vendedor pode criar ordens, ver produtos, ver clientes, fornecedores e transportadoras da filial cadastrada.'));

        Jetstream::role('user', __('User'), [
            'Ver Produtos',
            'Ver Transportadoras',
            'Ver Clientes',
            'Ver Fornecedores',
            'Ver Ordens',
            'Ver Estoque',
            'Ver Categorias',
        ])->description(__('User users have the ability to read, create, and update.'));

        Jetstream::role('financial', __('Financeiro'), [
            'Acesso Financeiro',
            'Geração de Relatórios',
            'Ver Produtos',
            'Ver Transportadoras',
            'Ver Clientes',
            'Ver Fornecedores',
            'Ver Ordens',
            'Ver Estoque',
            'Ver Categorias',
            'Cadastrar Ordem',
            'Cadastrar Orçamento',
            'Cadastrar Transportadora',
            'Cadastrar Cliente',
            // 'Remover Ordem',
            // 'Remover Orçamento',
            'Atualizar Ordem',
            'Atualizar Orçamento',
        ])->description(__('Vendedor pode criar ordens, ver produtos, ver clientes, fornecedores e transportadoras da filial cadastrada.'));
    }
}
