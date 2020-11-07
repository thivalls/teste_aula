<div>
    <form wire:submit.prevent="save" class="w-full">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="name">
                    Nome
                </label>
                <input wire:model="client.name" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="name" name="name" type="text" placeholder="Nome do cliente">
                @if($errors->has('client.name'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.name') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cpf">
                    CPF
                </label>
                <input wire:model="client.cpf" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cpf" type="text" name="cpf" placeholder="Digite o cpf">
                @if($errors->has('client.cpf'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.cpf') }}
                    </p>
                @endif
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="cnpj">
                    CNPJ
                </label>
                <input wire:model="client.cnpj" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="cnpj" name="cnpj" type="text" placeholder="Digite o cnpj">
                @if($errors->has('client.cnpj'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.cnpj') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="city">
                    Cidade
                </label>
                <input wire:model="client.city" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="city" name="city" type="text" placeholder="Digite a cidade">
                @if($errors->has('client.city'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.city') }}
                    </p>
                @endif
            </div>
                <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="state">
                    Estado
                </label>
                <input wire:model="client.state" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-last-name" type="text" name="state" placeholder="Digite o estado">
                @if($errors->has('client.state'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.state') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/3 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="street">
                    Rua
                </label>
                <input wire:model="client.street" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="street" name="street" type="text" placeholder="Rua...">
                @if($errors->has('client.street'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.street') }}
                    </p>
                @endif
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="number">
                    Número
                </label>
                <input wire:model="client.number" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="number" type="text" name="number" placeholder="Número...">
                @if($errors->has('client.number'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.number') }}
                    </p>
                @endif
            </div>
            <div class="w-full md:w-1/3 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="zipcode">
                    Cep
                </label>
                <input wire:model="client.zipcode" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="zipcode" type="text" name="zipcode" placeholder="CEP...">
                @if($errors->has('client.zipcode'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.zipcode') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone1">
                    Telefone 1
                </label>
                <input wire:model="client.phone1" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone1" name="phone1" type="text" placeholder="Telefone 1...">
                @if($errors->has('client.phone1'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.phone1') }}
                    </p>
                @endif
            </div>
            <div class="w-full md:w-1/2 px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="phone2">
                    Telefone 2
                </label>
                <input wire:model="client.phone2" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="phone2" name="phone2" type="text" placeholder="Telefone 2...">
                @if($errors->has('client.phone2'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.phone2') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="email">
                    Email
                </label>
                <input wire:model="client.email" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="email" type="email" placeholder="Email...">
                @if($errors->has('client.email'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.email') }}
                    </p>
                @endif
            </div>
        </div>

        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3 mb-6 md:mb-0">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="notes">
                    Observações
                </label>
                <input wire:model="client.notes" class="appearance-none block w-full bg-gray-100 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="notes" name="notes" type="text" placeholder="Observações...">
                @if($errors->has('client.notes'))
                    <p class="text-red-500 text-xs italic">
                        {{ $errors->first('client.notes') }}
                    </p>
                @endif
            </div>
        </div>
    </form>

    <a href="{{ route('web.clients.index') }}" class="bg-gray-500 hover:bg-gray-400 text-white font-bold py-2 px-4 border-b-4 border-gray-700 hover:border-gray-500 rounded">
        Voltar
    </a>
    <button wire:click="save" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-4 border-b-4 border-green-700 hover:border-green-500 rounded ml-4">
        Salvar
    </button>
</div>
