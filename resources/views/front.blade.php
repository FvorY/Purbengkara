<!DOCTYPE html>
<html lang="en" data-brk-skin="brk-green-1.css">
@include('layouts_front._head')

@yield('extra_style')
<body>
		<div class="brk-loader">
			<div class="brk-loader__loader"></div>
		</div>

		@include('layouts_front._sidebar')

		@yield('content')

		@include('layouts_front._footer')

    @include('layouts_front._script')

    @yield('extra_script')
</body>
</html>
