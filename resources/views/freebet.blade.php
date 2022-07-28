<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Form') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session()->has('success'))
                <div class="alert alert-success shadow-lg my-8">
                    <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                    <span>{{ session('success') }}</span>
                    </div>
                </div>
            @endif
            <div class="overflow-hidden shadow-sm sm:rounded-lg">
                <div class="">
                    <form action="/freebet" method="POST">
                        @csrf
                        <div class="overflow-x-auto w-full">
                            <table class="table w-full">
                              <!-- head -->
                              <thead>
                                <tr>
                                  <th class="bg-slate-600 text-slate-300">NO</th>
                                  <th class="bg-slate-600 text-slate-300">ID Game</th>
                                  <th class="bg-slate-600 text-slate-300">Chanel</th>
                                  <th class="bg-slate-600 text-slate-300">event</th>
                                  <th class="bg-slate-600 text-slate-300">web</th>
                                  <th class="bg-slate-600 text-slate-300">Type Member</th>
                                  <th class="bg-slate-600 text-slate-300">Status</th>
                                  <th class="bg-slate-600 text-slate-300">Action</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($data as $item)
                                <tr class="active">
                                <th>{{$item->id}}</th>
                                <th>{{$item->idGame}}</th>
                                <td>{{$item->chanel}}</td>
                                <td>{{$item->event}}</td>
                                <td>{{$item->web}}</td>
                                <td>{{$item->typeMember}}</td>
                                <td>
                                    @if ($item->status == 1)
                                    <div class="badge badge-success gap-2">
                                        Di Setujui
                                    </div>
                                    @elseif ($item->status == 0)
                                    <div class="badge badge-info gap-2">
                                        Menunggu
                                    </div>
                                    @else
                                    <div class="badge badge-error gap-2">
                                        Di Tolak
                                    </div>
                                    @endif
                                </td>
                                <td class="flex">
                                    <form action="/setujui/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-Primary mr-4">Setujui</button>
                                    </form>
                                    @if ($item->status != 1)
                                    <form action="/tolak/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('put')
                                        <button class="btn btn-warning mr-4">Tolak</button>
                                    </form>
                                    @endif
                                    <form action="/delete/{{$item->id}}" method="POST">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-error">Hapus</button>
                                    </form>
                                </td>
                                
                                @endforeach
                              </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>