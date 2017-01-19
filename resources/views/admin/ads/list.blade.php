@extends('layouts.admin')

@section('title')
    Ads
@endsection

@section('content')
    <div>
        <div class="theader">
            <h2>Ads</h2>
            <a href="{{ route('create-ad') }}" class="btn btn-success">Add Ad</a>
        </div>

        <table class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>Purchaser</th>
                <th>Size</th>
                <th>Duration</th>
                <th>Times Served</th>
                <th>Campaign Start</th>
                <th>Campaign End</th>
            </tr>
            </thead>
            <tbody>
            @foreach($ads as $ad)
                <tr>
                    <td><a href="{{ route('edit-ad', [$ad->id]) }}">{{ $ad->purchaser }}</a></td>
                    <td>{{ $ad->size }}</td>
                    <td>{{ $ad->duration }}</td>
                    <td>{{ $ad->times_served }}</td>
                    <td>{{ $ad->campaign_start->format('M j, Y g:i A') }}</td>
                    <td>{{ $ad->campaign_end->format('M j, Y g:i A') }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="pagination-links">
            {{ $ads->links() }}
        </div>

    </div>
@endsection