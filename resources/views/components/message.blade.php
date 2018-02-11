<li class="message">
  <div class="media">
    <div class="media-left align-self-center">
      {{ $image }}
    </div>
    <div class="media-body">
      <h4>
        {{ $title }}
        @if ( ! empty($badge))
          <span class="badge badge-primary align-top">
            {{ $badge }}
          </span>
        @endif
      </h4>
      <p>
        {{ $slot }}
      </p>
    </div>

    @if ( ! empty($button))
      <div class="media-right align-self-center">
        {{ $button }}
      </div>
    @endif

  </div>
</li>
