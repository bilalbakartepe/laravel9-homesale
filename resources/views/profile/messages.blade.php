<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Messages') }}
                    </h2>
                </div>

            </div>
        </div>
    </x-slot>

    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <hr>
        @if($messages != null )
            @foreach($messages as $message)


            <td>
                <th>Name : {{ $message -> name }}</th>
            </td>
                    <br>
            <td>
                <th>Surname : {{ $message -> surname }}</th>
            </td>
            <br>
                <td><th>Email : {{ $message -> email }}</th></td><br>

            <td><th>Message : {{ $message -> message }}</th></td><br>

            <td><th>Status : {{ $message -> status }}</th></td>
        <hr>
            @endforeach
         @endif
        </div>
    </div>
</x-app-layout>
