@extends('layouts.front')

@section('content')
    <section>
        <div class="text-muted h2">Política de {{ $policy }}</div>
        <div class="my-5">
            {!! $content ?? '' !!}
        </div>
    </section>
@endsection

