@if ($errors->any())
<div class="">
  <ul>
    @foreach($errors->all() as $error)
    <div class="alert alert-danger">
        <span>{{ $error }}</span>
    </div>
    @endforeach
  </ul>
</div>
@endif
