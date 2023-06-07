@extends('layout.admin')

@section('content')
    <div class="container py-5">
        <div class="btn-create">
            <a href="{{ route('painel.banner.create') }}" type="button" class="btn btn-primary">novo banner</a>
        </div>
    </div>
@endsection