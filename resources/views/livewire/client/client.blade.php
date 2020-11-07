<div>
    <table class="table-auto w-full">
        <thead>
            <tr>
                <th class="px-4 py-2">#</th>
                <th class="px-4 py-2">Nome</th>
                <th class="px-4 py-2">Email</th>
                <th class="px-4 py-2">Telefone</th>
                <th class="px-4 py-2">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($clients as $client)
                <tr>
                    <td class="border px-4 py-2 text-center">{{ $client->id }}</td>
                    <td class="border px-4 py-2">{{ $client->name }}</td>
                    <td class="border px-4 py-2">{{ $client->email }}</td>
                    <td class="border px-4 py-2 text-center">{{ $client->phone1 }}</td>
                    <td class="border px-4 py-2 text-center">
                    <a href="{{ route('web.clients.edit', ['client' => $client->id]) }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-3 border-b-4 border-green-700 hover:border-green-500 rounded inline-flex items-center">
                    <svg class="h-4 w-4 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 460 460"><path d="M239.726 383.866l-47.513 12.205a41.625 41.625 0 01-10.349 1.308c-11.111 0-21.558-4.327-29.415-12.184-10.35-10.35-14.517-25.587-10.876-39.764l1.08-4.203h-40.247c-13.807 0-25-11.193-25-25s11.193-25 25-25h53.455a69.923 69.923 0 0116.183-25.327l18.673-18.673h-88.311c-13.807 0-25-11.193-25-25s11.193-25 25-25h138.311l44.037-44.036c-.444.023-.89.036-1.339.036H102.407c-13.807 0-25-11.193-25-25s11.193-25 25-25h181.008c13.807 0 25 11.193 25 25 0 .449-.013.896-.036 1.339l60.654-60.654a70.74 70.74 0 0116.17-12.107v-28.46C385.203 12.691 372.511 0 356.856 0H28.966C13.311 0 .62 12.691.62 28.346v403.307C.62 447.309 13.311 460 28.966 460h327.89c15.655 0 28.346-12.691 28.346-28.346V252.142L271.744 365.6a69.9 69.9 0 01-32.018 18.266z"/>
                        <path d="M193.258 287.115a39.863 39.863 0 00-10.422 18.269l-12.205 47.512a11.6 11.6 0 0011.234 14.484c.961 0 1.93-.12 2.885-.365l47.512-12.205a39.863 39.863 0 0018.269-10.422l161.327-161.327-57.273-57.273-161.327 161.327zM447.519 90.127c-7.908-7.908-18.272-11.862-28.636-11.862s-20.729 3.954-28.636 11.862l-14.458 14.458 57.199 57.346 14.532-14.532c15.814-15.815 15.814-41.457-.001-57.272z"/>
                    </svg>
                    </a>
                    <a href="{{ route('web.clients.show', ['client' => $client->id]) }}" class="bg-green-500 hover:bg-green-400 text-white font-bold py-2 px-3 border-b-4 border-green-700 hover:border-green-500 rounded text-sm inline-flex items-center">
                    <svg class="h-4 w-4 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 461.312 461.312"><path d="M230.656 156.416c-40.96 0-74.24 33.28-74.24 74.24s33.28 74.24 74.24 74.24 74.24-33.28 74.24-74.24-33.28-74.24-74.24-74.24zm-5.632 52.224c-9.216 0-16.896 7.68-16.896 16.896h-24.576c.512-23.04 18.944-41.472 41.472-41.472v24.576z"/><path d="M455.936 215.296c-25.088-31.232-114.688-133.12-225.28-133.12S30.464 184.064 5.376 215.296c-7.168 8.704-7.168 21.504 0 30.72 25.088 31.232 114.688 133.12 225.28 133.12s200.192-101.888 225.28-133.12c7.168-8.704 7.168-21.504 0-30.72zm-225.28 122.88c-59.392 0-107.52-48.128-107.52-107.52s48.128-107.52 107.52-107.52 107.52 48.128 107.52 107.52-48.128 107.52-107.52 107.52z"/></svg>
                    </a>
                    <a onclick="return confirm('Deseja remove o cliente {{$client->name}}') || event.stopImmediatePropagation()" wire:click="deleteEntity('{{ $client->id }}')">
                        <button class="bg-red-500 hover:bg-red-400 text-white py-2 px-3 border-b-4 border-red-700 hover:border-red-500 rounded inline-flex items-center">
                        <svg class="h-4 w-4 fill-current text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M424 64h-88V48c0-26.51-21.49-48-48-48h-64c-26.51 0-48 21.49-48 48v16H88c-22.091 0-40 17.909-40 40v32c0 8.837 7.163 16 16 16h384c8.837 0 16-7.163 16-16v-32c0-22.091-17.909-40-40-40zM208 48c0-8.82 7.18-16 16-16h64c8.82 0 16 7.18 16 16v16h-96zM78.364 184c-2.855 0-5.13 2.386-4.994 5.238l13.2 277.042c1.22 25.64 22.28 45.72 47.94 45.72h242.98c25.66 0 46.72-20.08 47.94-45.72l13.2-277.042c.136-2.852-2.139-5.238-4.994-5.238zM320 224c0-8.84 7.16-16 16-16s16 7.16 16 16v208c0 8.84-7.16 16-16 16s-16-7.16-16-16zm-80 0c0-8.84 7.16-16 16-16s16 7.16 16 16v208c0 8.84-7.16 16-16 16s-16-7.16-16-16zm-80 0c0-8.84 7.16-16 16-16s16 7.16 16 16v208c0 8.84-7.16 16-16 16s-16-7.16-16-16z"/></svg>
                        </button>
                    </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
