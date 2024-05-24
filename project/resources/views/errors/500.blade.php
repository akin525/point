<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>Not Found</title>
    <link rel="icon" type="image/png" href="{{url('images/favicon.png');}}" />

   <!-- CSS Assets -->
    <link rel="stylesheet" href="{{url('css/app.css')}}" />

    <!-- Javascript Assets -->
    <script src="{{url('js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;display=swap"
      rel="stylesheet"
    />
  </head>
  <body x-data x-bind="$store.global.documentBody">


    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
      x-cloak
    >
      <main class="grid w-full grow grid-cols-1 place-items-center" >
     <div class="max-w-md p-6 text-center">
          <div class="w-full">
            <img class="w-full" src="{{url('images/illustrations/error-500.svg');}}" alt="image">
          </div>
          <p class="pt-4 text-7xl font-bold text-primary dark:text-accent">
            500
          </p>
          <p class="pt-4 text-xl font-semibold text-slate-800 dark:text-navy-50">
            Internal Server Error
          </p>
          <p class="pt-2 text-slate-500 dark:text-navy-200">
            The server has been deserted for a while. Please be patient or try
            again later
          </p>
        </div>
      </main>
    </div>

    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
  </body>
</html>
