@extends('layouts.app')


@section('content')
<div>
    <div id="timeline-id">
        <div id="map-id"></div>
        <div>
        {{ $user['name'] }}
            <form method="POST" action="/store">
                @csrf
                <input type="hidden" name='user_id' value="{{ $user['id'] }}">
                <div id="comment-id">
                    <textarea name="comment" class="comment-areas" row="10"></textarea>
                    <div>
                        <div>
                        </div>
                    </div>
                </div>
                <button type="submit" >投稿する</button>
            </form>
        </div>
    </div>
</div>
@endsection