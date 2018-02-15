@extends('dashboard.layouts.page')

@section('content')
<table class="table table-responsive-sm table-hover table-outline mb-0">
  <thead class="thead-light">
    <tr>
      <th class="text-center"><i class="icon-people"></i></th>
      <th>Name</th>
      <th>E-Mail</th>
      <th>Subject</th>
      <th>Activity</th>
    </tr>
  </thead>

  <tbody>
    
    @foreach($messages as $message)
    
    <tr class="clickable-row" data-href="#">
      <td class="text-center">
        <div class="avatar">
          @if($message->isRead)
            <i class="icon-envelope-letter"></i>
          @else
            <i class="icon-envelope"></i>
            <span class="badge badge-success">New</span>
          @endif
        </div>
      </td>

      <td>
        <div>{{ $message->senderName }}</div>
      </td>

      <td>
        <div>{{ $message->email }}</div>
      </td>

      <td>
        <div>{{ str_limit($message->subject, 100) }}</div>
      </td>

      <td>
        <div class="small text-muted">Send</div>
        <strong>{{ $message->createdAtDiff }}</strong>
      </td>
    </tr>
  
    @endforeach

  </tbody>
</table>
@endsection
