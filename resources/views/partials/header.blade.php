<div class="nav-scroller bg-body shadow-sm">
    <div class="container">
    <nav class="nav" aria-label="Secondary navigation">


      <a class="nav-link" href="{{route('home')}}">Home</a>
      <a class="nav-link" href="{{route('feature')}}">Features</a>
      <a class="nav-link" href="{{route('pricing')}}">Pricing</a>
      <a class="nav-link" href="{{route('about')}}">About</a>
      <a class="nav-link text-end text-dark fw-bold" href=" ">Execution Time - {{$executionTime}}</a>
      <a class="nav-link text-dark fw-bold">Redis Data - {{$redis??'NO'}}</a>
    </nav>

  </div>
</div>


