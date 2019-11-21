<html>
<head>
<title>App Name - @yield('title')</title>
</head>
<script type="text/javascript">
     document.write( "@" );
</script>
<body>
@section('sidebar')
This is the {{ $mater }} sidebar.
@show

<div class="container">
@yield('content')
</div>
<p><span>@lang('Hi')</span></p>

@component('alert')
@slot('title')
Forbidden
@endslot
<strong>Whoops!</strong> Something went wrong!
@endcomponent

@foreach ($users as $user)
@if ($user->type == 1)
@continue
@endif
<li>{{ $user->name }}</li>
@if ($user->number == 5)
@break
@endif
@endforeach
</body>
</html>

