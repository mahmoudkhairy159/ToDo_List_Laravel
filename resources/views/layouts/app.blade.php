<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title')</title>
    <!--bootstrap-->
    <link rel="stylesheet" href="/css/app.css">
    <!--font-awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.0-2/css/all.min.css" />
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <h1 class="alert-heading  alert-primary ">ToDO List</h1>

                <!--validation errors-->
                @if (count($errors)>0)
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger"> {{  $error}}</div>
                    @endforeach

                @endif
                <!---Session-->
                @if(session()->has('success'))
                <alert class="alert alert-success d-block"> {{ session()->get('success') }}</alert>
                @endif
                <script>
                    $(function() {
                        var timeout = 2000; // in miliseconds (3*1000)
                        $('.alert').delay(timeout).fadeOut(300);
                        });
                        {{ session()->forget('flashMessage') }}
                </script>
                @yield('content')

            </div>
            <div class="col-md-4 col-lg-4">
                <a href="{{  route('todo.create')}}" class="btn btn-info mt-2"> Create mew Todo</a>

            </div>
        </div>

    </div>
</body>

</html>
