<h1>{{ $seller->name }}'s Profiles</h1>

@foreach($seller->profiles as $profile)
    <p>Bio: {{ $profile->bio ?? 'No bio available' }}</p>
@endforeach