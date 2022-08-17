<a href="{{ route($routeTo) }}">
    <div class="card {{ $type }}">
        <div>
            <div class="numbers">{{ $count }}</div>
            <div class="cardName">{{ $slot }}</div>
        </div>
        <div class="iconBx">
            <ion-icon name="{{ $icon }}"></ion-icon>
        </div>
    </div>
</a>