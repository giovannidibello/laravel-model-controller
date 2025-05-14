<div class="card mb-4">
    <div class="card-body">
      <h5 class="card-title">{{$title}}</h5>
      <h6 class="card-subtitle mb-2 text-muted">({{$original_title}})</h6>
      <p class="card-text text-muted">{{$nationality}}</p>  
      <p class="card-text text-muted">{{$date}}</p>    
        
    </div>
    <p class="card-footer m-0 text-primary">
        @php
        $rating = floatval((string) $vote);
    @endphp
    
    @for ($i = 1; $i <= 10; $i++)
        @if ($i <= floor($rating))
            {{-- Stella piena --}}
            <i class="fas fa-star text-primary"></i>
        @elseif ($i - 1 < $rating && $rating < $i)
            {{-- Mezza stella --}}
            <i class="fas fa-star-half-alt text-primary"></i>
        @else
            {{-- Stella vuota --}}
            <i class="far fa-star text-primary"></i>
        @endif
    @endfor
    ({{$rating}})</p>
    
  </div>