@extends('layouts.layout')
@section('content')
    <div class="row">
        <div class="col-sm-12 col-md-12 col-ls-12">
            @php $var = 0 @endphp
            <ul>
                @foreach($series as $serie)
                    @if(!$serie->parent_id)
                            <li>{{$serie->series_name}}</li>
                            @php $var = $serie->id @endphp
                    @elseif($serie->parent_id && $serie->parent_id === $var)
                        <ul>
                            <li>
                                {{$serie->series_name}}
                            </li>
                        </ul>
                        @php $var = $serie->id @endphp
                    @else
                        <ul>
                            <ul>
                                <li>
                                    {{$serie->series_name}}
                                </li>
                            </ul>
                        </ul>
                    @endif
                @endforeach
            </ul>
        </div>
    </div>
@endsection