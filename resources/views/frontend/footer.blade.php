<div class="social-media-links">
  @foreach($socialMediaLinks as $link)
      @if($link->enabled)
          <a href="{{ $link->url }}" target="_blank">{{ $link->platform_name }}</a>
      @endif
  @endforeach
</div>
