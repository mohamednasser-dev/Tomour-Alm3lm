@include('adminLayouts.adminHeader')
@include('adminLayouts.adminSidebar')
@include('adminLayouts.messages')
{{--@include('adminLayouts.errors')--}}
@yield('content')
@include('adminLayouts.adminFooter')
