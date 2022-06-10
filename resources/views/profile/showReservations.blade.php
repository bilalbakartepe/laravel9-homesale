<x-app-layout>
    <x-slot name="header">
        <div class="container">
            <div class="row">

                <div class="col-sm">
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                        {{ __('Reservations') }}
                    </h2>
                </div>

                @if( !is_null($reservations) )
                    @foreach($reservations as $reservation )

                        @if( $car = \App\Models\Car::find($reservation->car_id) )
                            <img src="{{ Storage::url(\App\Models\Car::find($reservation->car_id)->image) }}" height="250" width="250" style="border-radius: 10px" alt="">
                        @endif

                        <td><th>Where you from : {{ $reservation -> where_you_from }}</th></td>
                        <br>
                        <td><th>Where you go : {{ $reservation -> where_you_go }}</th></td>
                        <br>
                        <td><th>Rezervation Date : {{ $reservation -> rezdate }}</th></td>
                        <br>
                        <td><th>Rezervation Time : {{ $reservation -> reztime }}</th></td>
                        <br>
                        <td><th>Return Date : {{ $reservation -> returndate }}</th></td>
                        <br>
                        <td><th>Return Time : {{ $reservation -> returntime }}</th></td>
                        <br>
                        <td><th>Price : {{ $reservation -> price }}</th></td>
                        <br>
                        <td><th>Status : {{ $reservation -> status }}</th></td>

                        <hr>
                    @endforeach
                @else
                    <h1>There is no reservations.</h1>
                @endif

            </div>
        </div>
    </x-slot>


</x-app-layout>
