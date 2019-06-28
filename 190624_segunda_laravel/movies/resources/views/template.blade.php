<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title> @yield('pageTitle') </title>
  </head>
  <body>

    @include('navbar')

    @yield('mainContent')

    @yield('secondaryContent')

  </body>
</html>
