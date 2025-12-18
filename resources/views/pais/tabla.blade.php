<div>
    <!-- You must be the change you wish to see in the world. - Mahatma Gandhi -->
    <ul>
        @foreach($paises as $pais)
        <li>{{ $pais->nombre }}</li>
        @endforeach

    </ul>
</div>