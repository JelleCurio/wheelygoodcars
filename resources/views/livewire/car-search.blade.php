<div>
    <input type="text" wire:model="search" placeholder="Zoek op merk of model..." class="form-control mb-4">

    <div class="row">
        @foreach($cars as $car)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($car->image)
                        <img src="{{ $car->image }}" class="card-img-top" alt="Car Image">
                    @else
                        <img src="https://img.freepik.com/vrije-vector/rode-auto-met-het-karakter-van-het-grote-ogenkarton-geisoleerd_1308-46902.jpg"
                            class="card-img-top" alt="Default Car Image">
                    @endif

                    <a href="{{ route('detail-car', $car->id) }}">
                        <div class="car-details">
                            <h2>{{ $car->brand }} - {{ $car->model }}</h2>
                            <p>Kenteken: {{ $car->license_plate }}</p>
                            <p>Kilometerstand: {{ $car->mileage }} km</p>
                            <p>Prijs: €{{ number_format($car->price, 2) }}</p>
                            <p>Kleur: {{ $car->color }}</p>
                            <p>Bouwjaar: {{ $car->production_year }}</p>
                        </div>
                    </a>

                    @if(Auth::id() == $car->user_id)
                        <form action="{{ route('auto.delete', $car->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="delete-button">Verwijderen</button>
                        </form>
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</div>