createです。<br>

<form action="{{ route('samples.store') }}" method="post">
  {{-- postの時はCSRF対策が必須 --}}
  @csrf
  名前：<input name="name"><br>
  メールアドレス：<input name="email">
  <button>登録</button>
</form>