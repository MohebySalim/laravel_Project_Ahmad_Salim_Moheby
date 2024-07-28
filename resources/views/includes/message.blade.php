@if (count($errors) > 0)
    @foreach($errors->all() as $error)
        <p class="mymsg alert alert-danger">{{ $error }}</p>
    @endforeach
@endif

@if (session()->has('message'))
    <p class="mymsg alert alert-success">{{ session('message') }}</p>
@endif
<script>
    setTimeout(function() {
        $('.mymsg').fadeOut('fast');
    }, 1000);
</script>
