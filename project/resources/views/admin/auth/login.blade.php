<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Meta tags  -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
    />

    <title>{{$admin->site_name}}</title>
    <link rel="icon" type="image/png" href="images/favicon.png" />

    <!-- CSS Assets -->
    <link rel="stylesheet" href="{{url('css/app.css')}}" />

    <!-- Javascript Assets -->
    <script src="{{url('js/app.js')}}" defer></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />
  </head>
  <body x-data class="is-header-blur" x-bind="$store.global.documentBody">
    <!-- App preloader-->
    <div
      class="app-preloader fixed z-50 grid h-full w-full place-content-center bg-slate-50 dark:bg-navy-900"
    >
      <div class="app-preloader-inner relative inline-block h-48 w-48"></div>
    </div>

    <!-- Page Wrapper -->
    <div
      id="root"
      class="min-h-100vh flex grow bg-slate-50 dark:bg-navy-900"
      x-cloak
    >
      <div class="fixed top-0 hidden p-6 lg:block lg:px-12">
        <a href="#" class="flex items-center space-x-2">
          <p class="text-xl font-semibold uppercase text-slate-700 dark:text-navy-100">
            {{$admin->site_name}}
          </p>
        </a>
      </div>
      <div class="hidden w-full place-items-center lg:grid">
        <div class="w-full max-w-lg p-6">
          <img
            class="w-full"
            x-show="!$store.global.isDarkModeEnabled"
            src="{{url('images/illustrations/dashboard-check.svg')}}"
            alt="image"
          />
          <img
            class="w-full"
            x-show="$store.global.isDarkModeEnabled"
            src="{{url('images/illustrations/dashboard-check-dark.svg')}}"
            alt="image"
          />
        </div>
      </div>
      <main
        class="flex w-full flex-col items-center bg-white dark:bg-navy-700 lg:max-w-md"
      >
        <div class="flex w-full max-w-sm grow flex-col justify-center p-5">
          <div class="text-center">
            <img style="height:20px;"
              class="mx-auto  lg:hidden"
              src="{{$admin->profile_logo}}"
              alt="logo"
            />
            <div class="mt-4">
              <h2
                class="text-2xl font-semibold text-slate-600 dark:text-navy-100"
              >
                Welcome Back
              </h2>
              <p class="text-slate-400 dark:text-navy-300">
                Please sign in to continue
              </p>
            </div>
          </div>
          <div class="mt-16">

        <!-- Session Status -->
        <div class="mb-4" :status="session('status')"></div>
        @error('throttle')
        <span class="text-tiny+ text-error">{{ $message }}</span>
        @enderror
        <form method="POST" action="{{ route('admin.login') }}">
            @csrf
            <input type="hidden" name="login"/>
            <label class="relative flex">
              <input
                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                placeholder="Email"
                id="email" type="email" name="email" required
              />
              <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 transition-colors duration-200"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                  />
                </svg>
              </span>
            </label>
            @error('email')
            <span class="text-tiny+ text-error">{{ $message }}</span>
            @enderror
            <label class="relative mt-4 flex">
              <input
                class="form-input peer w-full rounded-lg bg-slate-150 px-3 py-2 pl-9 ring-primary/50 placeholder:text-slate-400 hover:bg-slate-200 focus:ring dark:bg-navy-900/90 dark:ring-accent/50 dark:placeholder:text-navy-300 dark:hover:bg-navy-900 dark:focus:bg-navy-900"
                placeholder="Password"
                id="password"
                type="password"
                name="password"
                required
              />
              <span
                class="pointer-events-none absolute flex h-full w-10 items-center justify-center text-slate-400 peer-focus:text-primary dark:text-navy-300 dark:peer-focus:text-accent"
              >
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5 transition-colors duration-200"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="1.5"
                    d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                  />
                </svg>
              </span>
            </label>
            @error('password')
            <span class="text-tiny+ text-error">{{ $message }}</span>
            @enderror
            <div class="mt-4 flex items-center justify-between space-x-2">
              <label class="inline-flex items-center space-x-2">
                <input
                  class="form-checkbox is-outline h-5 w-5 rounded border-slate-400/70 bg-slate-100 before:bg-primary checked:border-primary hover:border-primary focus:border-primary dark:border-navy-500 dark:bg-navy-900 dark:before:bg-accent dark:checked:border-accent dark:hover:border-accent dark:focus:border-accent"
                  id="remember_me" type="checkbox" name="remember"
                />
                <span class="line-clamp-1">Remember me</span>
              </label>

            </div>
            <button
              class="btn mt-10 h-10 w-full bg-primary font-medium text-white hover:bg-primary-focus focus:bg-primary-focus active:bg-primary-focus/90 dark:bg-accent dark:hover:bg-accent-focus dark:focus:bg-accent-focus dark:active:bg-accent/90"
            >
            {{ __('Log in') }}
            </button>
        </form>

          </div>
        </div>
        <div
          class="my-5 flex justify-center text-xs text-slate-400 dark:text-navy-300"
        >
          <a>Developed By CSM &#169; All rights reserved.</a>
        </div>
      </main>
    </div>


    <div id="x-teleport-target"></div>
    <script>
      window.addEventListener("DOMContentLoaded", () => Alpine.start());
    </script>
  </body>
</html>

