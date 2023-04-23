<div class="card">

    <div class="card-body">

        <div class="card-title">

            <a href="/"> {{ $property->title }} </a>

        </div>
        <p class="card-text">
            {{ $property->surface }}m2 - {{ $property->city }} ( {{ $property->postal_code }} )
        </p>

        <div class="text-primary fw-bold" style="font-size: 1.4rem;">
        {{ number_format($property->price, thousands_separator: ' ') }}
        
        </div>
    </div>
</div>