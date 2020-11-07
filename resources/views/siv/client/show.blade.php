<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dados do cliente {{ $client->id }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl p-8">
                <table class="table-auto w-full">
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2"><strong>Nome</strong></td>
                            <td class="border px-4 py-2">{{ $client->name }}</td>
                        </tr>
                        @if($client->cpf)
                        <tr>
                            <td class="border px-4 py-2"><strong>CPF</strong></td>
                            <td class="border px-4 py-2">{{ $client->cpf }}</td>
                        </tr>
                        @endif
                        @if($client->cnpj)
                        <tr>
                            <td class="border px-4 py-2"><strong>CNPJ</strong></td>
                            <td class="border px-4 py-2">{{ $client->cnpj }}</td>
                        </tr>
                        @endif
                        <tr>
                            <td class="border px-4 py-2"><strong>Endereço</strong></td>
                            <td class="border px-4 py-2">
                            {{ $client->city }} {{ $client->state }}, {{ $client->street }}, {{ $client->number }} {{ $client->zipcode }}
                            </td>
                        </tr>
                        @if($client->phone1)
                        <tr>
                            <td class="border px-4 py-2"><strong>Telefone 1</strong></td>
                            <td class="border px-4 py-2">
                            {{ $client->phone1 }}
                            </td>
                        </tr>
                        @endif
                        @if($client->phone2)
                        <tr>
                            <td class="border px-4 py-2"><strong>Telefone 2</strong></td>
                            <td class="border px-4 py-2">
                            {{ $client->phone2 }}
                            </td>
                        </tr>
                        @endif
                        @if($client->email)
                        <tr>
                            <td class="border px-4 py-2"><strong>Email</strong></td>
                            <td class="border px-4 py-2">
                            {{ $client->email }}
                            </td>
                        </tr>
                        @endif
                        @if($client->notes)
                        <tr>
                            <td class="border px-4 py-2"><strong>Observação</strong></td>
                            <td class="border px-4 py-2">
                            {{ $client->notes }}
                            </td>
                        </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-8">
            <a href="{{ route('web.clients.index') }}" class="bg-blue-500 hover:bg-blue-400 text-white font-bold py-2 px-4 border-b-4 border-blue-700 hover:border-blue-500 rounded">
                    voltar
                </a>
        </div>

    </div>
</x-app-layout>
