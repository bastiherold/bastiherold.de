@extends('admin.home')

@section('additional-styles')
  <style>
      @import url('https://fonts.googleapis.com/css?family=Libre+Baskerville:400,700');
      @import url("//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css");
      .message-list {
        background: #eee;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        margin: 10px auto;
      }
      ul.message-component {
        margin: 0;
        padding: 0;
      }
      ul.message-component li {
        list-style: none;
        margin-bottom: 10px;
      }
      ul.message-component li:last-child {
        margin-bottom: 0;
      }
      ul.message-component li:hover {
        cursor: grabbing;
      }
      .message-list .media{
        border: 1px solid #d5dbdd;
        padding: 5px 20px;
        border-radius: 5px;
        box-shadow: 0px 2px 1px rgba(0,0,0,0.04);
        background: #fff;
      }
      .message-list .media .media-left img {
        width: 75px;
      }
      .message-list .media .media-body p {
        padding: 0 15px;
        font-size: 14px;
      }
      .message-list .media .media-body h4 {
        color: #6b456a;
        font-size: 18px;
        font-weight: 600;
        margin-bottom: 0;
        padding-left: 14px;
        margin-top:12px;
      }
      .message-list .btn-default {
        background: #6B456A;
        color: #fff;
      }
  </style>
@endsection

@section('content')
  
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
    <h1 class="h2">Messages</h1>
</div>

<div class="col-md-10 message-list">
  <ul class="message-component">
    
    @foreach ($messages as $message)

      @component('components.message')
        
        @slot('image')
          @if ($message->isRead)
            <i class="far fa-4x fa-envelope-open"></i>
          @else
            <i class="fas fa-4x fa-envelope"></i>
          @endif
          {{--  <img class="rounded-circle" src="https://randomuser.me/api/portraits/women/50.jpg">  --}}
        @endslot

        @slot('title')
          {{ $message->senderName }}
        @endslot

        @slot('badge')
          {{ $message->createdAtDiff }}
        @endslot

        {{ $message->subject }}

        @slot('button')
          <a href="{{ route('messages.show', ['message' => $message]) }}" class="btn btn-info">Reply</a>
        @endslot
      @endcomponent

    @endforeach

  </ul>
</div>

@endsection
