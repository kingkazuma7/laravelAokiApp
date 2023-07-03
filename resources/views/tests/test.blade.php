<!-- ③ビュー -->
test blade<br>

@foreach($values as $value)
{{ $value->id }}<br>
{{ $value->text }}<br>
@endforeach