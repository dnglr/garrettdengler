@extends('_layouts.master')

@section('body')
<header>

  <div class="logo is-hidden">
    <picture class="js-logo">
      {{-- <source srcset="/assets/images/logo_md.png" media="(min-width: " --}}
      <img src="/assets/images/logo_sm.png" alt="Garrett DNGLR" class="logo__img">
    </picture>
  </div>

</header>
<div class="grid__space" aria-hidden="true"></div>
<div class="grid is-hidden" aria-hidden="true">
  <div class="grid__plane">
    @for ($i = 1; $i < 100; $i++)
      <span class="grid__line grid__line--{{$i}}"></span>
    @endfor
  </div>
</div>

@endsection
