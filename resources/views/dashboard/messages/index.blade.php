@extends('dashboard.layouts.page')

@section('content')
<div class="columns">
  <div class="column is-12">
    <div class="card box">
      @if ($messages->count() >= 1)
        <table class="table is-striped is-narrow is-hoverable is-fullwidth">
          <thead>
            <tr>
              <th>#</th>
              <th>Name</th>
              <th>E-Mail</th>
              <th>Subject</th>
              <th>Message</th>
            </tr>
          </thead>
          <tbody>
            @foreach($messages as $m)
              <tr>
                <th>
                  <a href="{{ route('message.show', $m)}}">
                  @if($m->isRead)
                    <span class="tag is-primary">Open</span>
                  @else
                    <span class="tag is-success">New</span>
                  @endif
                  </a>
                </th>
                <td>{{ $m->senderName }}</td>
                <td>{{ $m->email }}</td>
                <td>{{ str_limit($m->subject, 15) }}</td>
                <td>{{ str_limit($m->body, 15) }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      @else
        No Messages found!
      @endif
    </div>
  </div>
</div>

@endsection
