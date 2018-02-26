<!DOCTYPE html>
<html>
<head>
    
<title>welcome | @yield('title')</title>
    @include('includefiles.headerlibs')
   
</head>
<body>




   


@include('includefiles.navbar')

    @include('includefiles.bodylib');

        <div class="content">
        
            <div class="container-fluid">

        
@yield('content')
    </div>
</div>



</body>

</html>