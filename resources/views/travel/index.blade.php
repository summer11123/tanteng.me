@extends('layouts.default')

@section('title', 'Travel - tanteng.me')

@section('content')
<div class="container">
    <div class="page-header">
        <h1><span class="glyphicon glyphicon-picture"></span> 旅行 <small>Travel</small></h1>
    </div>

    <div class="row">
        @foreach($lists as $list)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <a href="{{ $list->url }}" target="_blank"><img class="img-responsive" src="{{ $list->cover_image }}" alt="{{ $list->destination }}"></a>
                <div class="caption">
                    <h3><a href="{{ route('travel.destination', [$list->slug]) }}" target="_blank">{{ $list->destination }}</a><span class="pull-right badge">{{ $list->total }}</span></h3>
                    <p><a href="{{ $list->url }}" target="_blank">{{ str_limit($list->description, 122) }}</a></p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
