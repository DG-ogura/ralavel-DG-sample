indexです。<br>

@if (session('flash_message'))
  <div>
    {{ session('flash_message') }}
  </div>
@endif
<br>

Bladeなのでちょっと書き方が変わる
<br>
<a href="{{ route('samples.create') }}">新規登録</a>
<br>

{{-- Blade内で繰り返す --}}

@foreach($samples as $sample)
  {{ $sample->name }}
  {{ $sample->email }}<br>
@endforeach