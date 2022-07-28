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
                    <label class="btn btn-info mb-4 modal-button" for="my-modal-4">Tambah Chanel</label>
                    <!-- Put this part before </body> tag -->
                    <input type="checkbox" id="my-modal-4" class="modal-toggle" />
                    <label for="my-modal-4" class="modal cursor-pointer">
                    <label class="modal-box relative" for="">
                        <h3 class="text-lg font-bold">Congratulations random Internet user!</h3>
                        <p class="py-4">You've been selected for a chance to get one year of subscription to use Wikipedia for free!</p>
                    </label>
                    </label>
                    <div class="overflow-x-auto w-full">
                        <table class="table w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th class="bg-slate-600 text-slate-300">NO</th>
                              <th class="bg-slate-600 text-slate-300">Nama Chanel</th>
                              <th class="bg-slate-600 text-slate-300">Web</th>
                              <th class="bg-slate-600 text-slate-300">Link Form</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $item)
                            <tr class="active">
                            <th>{{$item->id}}</th>
                            <th>{{$item->namaChanel}}</th>
                            <td>{{$item->namaWeb}}</td>
                            <td><input class="input input-bordered bg-slate-200 w-full max-w-xs mr-4" id="freebet" value="http://127.0.0.1:8000/formfreebet/{{$item->id}}"/><button class="btn btn-info" onclick="copyToClipboard('freebet')">Copy</button></td>
                            @endforeach
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>