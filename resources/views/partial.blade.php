@if ($message = Session::get('success'))
    <div class="alert alert-success" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('error'))
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@endif

@if ($message = Session::get('danger'))
    <div class="alert alert-danger" role="alert">
        {{ $message }}
    </div>
@endif

<script type="text/javascript">
    var modal = false;
</script>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        Validation Faild!!
    </div>
    <script type="text/javascript">
        var modal = true;
    </script>
@endif