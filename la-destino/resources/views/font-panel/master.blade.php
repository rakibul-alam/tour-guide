<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    {{--CSS CUSTOMIZATION--}}
    @include('.font-panel.common.style')
</head>
<body>
{{--MENU--}}
@include('.font-panel.common.nav')
<main>
    @yield('body')
</main>
{{--Footer--}}
@include('.font-panel.common.footer')
{{--SCRIPT--}}
@include('.font-panel.common.script')
</body>
</html>