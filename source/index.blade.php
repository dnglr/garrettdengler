@extends('_layouts.master')

@section('body')
<div class="grid__space" aria-hidden="true"></div>
<div class="grid is-hidden" aria-hidden="true">
  <div class="grid__plane">
    @for ($i = 1; $i < 100; $i++)
      <span class="grid__line grid__line--{{$i}}"></span>
    @endfor
  </div>
</div>

@endsection
