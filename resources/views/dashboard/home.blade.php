@extends('dashboard.layouts.page')

@section('content')

<div class="row">
  
  <div class="col-sm-6 col-lg-3">
    <div class="social-box facebook">
      <i class="fa fa-envelope"></i>
      <ul>
        <li>
          <strong>{{ App\Message::unreadCount() }}</strong>
          <span>Unread</span>
        </li>
        <li>
          <strong>{{ App\Message::count() }}</strong>
          <span>Messages</span>
        </li>
      </ul>
    </div>
  </div>

</div>

@endsection
