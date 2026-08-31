<x-layout>
    @foreach ($contact as $con )

    <p>{{ $con->email }}</p>
    <p>{{ $con->instagram }}</p>
    <p>{{ $con->bandcamb }}</p>
    @endforeach

</x-layout>