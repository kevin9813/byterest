<!DOCTYPE html>
<html lang="es" data-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page</title>
    <link href="{{ asset('assets/css/plugins/daiysiui5.css') }}" rel="stylesheet" type="text/css" />
    <script src="{{ asset("assets/js/plugins/tailwindcss.js?v=1") }}"></script>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar bg-base-100 shadow-sm">
        <div class="navbar-start">
          <div class="dropdown">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /> </svg>
            </div>
            <ul tabindex="0" class="menu menu-sm dropdown-content bg-base-100 rounded-box z-1 mt-3 w-52 p-2 shadow">
              <li><a>Item 1</a></li>
              <li>
                <a>Parent</a>
                <ul class="p-2">
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </li>
              <li><a>Item 3</a></li>
            </ul>
          </div>
          <a class="btn btn-ghost text-xl">daisyUI</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a>Item 1</a></li>
            <li>
              <details>
                <summary>Parent</summary>
                <ul class="p-2">
                  <li><a>Submenu 1</a></li>
                  <li><a>Submenu 2</a></li>
                </ul>
              </details>
            </li>
            <li><a>Item 3</a></li>
          </ul>
        </div>
        <div class="navbar-end">
          <a href="/login" class="btn btn-primary">Login</a>
        </div>
      </div>



      <div class="container py-8 md:py-12 xl:py-16 2xl:py-24"><div class="text-center"><div class="rounded-box inline-flex items-center border border-green-500/10 bg-green-500/5 p-2 text-green-500"><span class="iconify lucide--dollar-sign size-5"></span></div><p class="mt-4 text-3xl font-semibold">Find Your Perfect Plan</p><p class="text-base-content/70 mt-3 inline-block max-w-lg">Choose a<span class="tooltip cursor-help" data-tip="Pay once for lifetime access, enjoy free updates, and upgrade to a higher plan anytime with a discount on your current plan"><span class="decoration-primary pb-0.5 underline decoration-dashed decoration-1 underline-offset-2"><span class="animated-text from-primary mx-1 bg-linear-to-r via-blue-500 to-purple-500 font-medium">one time payment</span></span></span>plan that fits your needs, with lifetime access and upgrade it anytime.</p></div><div class="mt-16 grid gap-4 lg:grid-cols-3 xl:gap-6"><div class="border-base-300 rounded-box border"><div class="bg-base-content/1 border-base-300 border-b p-6"><div class="flex justify-between gap-3"><div class="bg-base-content/3 border-base-300 rounded-box inline-flex items-center border p-2"><span class="iconify lucide--lightbulb size-4.5"></span></div><p class="text-3xl font-semibold">$69</p></div><p class="mt-3 text-[22px] font-medium">Solo</p><p class="text-base-content/80 mt-1 text-sm">Great for solo developers working on hobby projects or personal creations</p><a class="btn btn-outline btn-block border-base-300 mt-5 gap-2.5" href="https://daisyui.com/store/checkout?product=cdd028c5-dd01-41fc-a036-fd73b7a24cc0&amp;aff=Db6q2" target="_blank"><span class="iconify lucide--shopping-cart size-4"></span>Get solo license</a></div><div class="p-5"><p class="text-base-content/70 text-sm">Available for</p><div class="mt-2 space-y-1"><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>HTML</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-x text-error size-5"></span><p>React</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-x text-error size-5"></span><p>Next.js</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-x text-error size-5"></span><p>SvelteKit</p></div></div><p class="text-base-content/70 mt-3 text-sm">License</p><div class="mt-2 space-y-1"><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>Only for 1 developer and 1 project</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-x text-error size-5"></span><p>Can be used for multiple projects/developers</p></div></div></div></div><div class="border-primary/25 rounded-box relative border"><div class="bg-primary text-primary-content absolute start-1/2 -top-3 -translate-x-1/2 rounded-full px-3 py-1 text-xs">Most Popular</div><div class="bg-primary/4 dark:bg-primary/6 border-primary/20 border-b p-6"><div class="flex justify-between gap-3"><div class="bg-primary/10 text-primary border-primary/20 rounded-box inline-flex items-center border p-2"><span class="iconify lucide--rocket size-4.5"></span></div><p class="text-3xl font-semibold">$129</p></div><p class="text-primary mt-3 text-[22px] font-medium">Team</p><p class="text-base-content/80 mt-1 text-sm">Ideal for small companies for quick integration and team collaboration</p><a class="btn btn-primary btn-block mt-5 gap-2.5" href="https://daisyui.com/store/checkout?product=cdd028c5-dd01-41fc-a036-fd73b7a24cc0&amp;aff=Db6q2" target="_blank"><span class="iconify lucide--shopping-bag size-4"></span>Get team license</a></div><div class="p-5"><p class="text-base-content/70 text-sm">Available for</p><div class="mt-2 space-y-1"><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>HTML</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>React</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>Next.js</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>SvelteKit</p></div></div><p class="text-base-content/70 mt-3 text-sm">License</p><div class="mt-2 space-y-1"><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>Team (multiple developers)</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-x text-error size-5"></span><p>Can be used in multiple projects</p></div></div></div></div><div class="border-secondary/25 rounded-box border"><div class="bg-secondary/4 dark:bg-secondary/6 border-secondary/20 border-b p-6"><div class="flex justify-between gap-3"><div class="bg-secondary/10 text-secondary border-secondary/20 rounded-box inline-flex items-center border p-2"><span class="iconify lucide--briefcase size-4.5"></span></div><p class="text-3xl font-semibold">$499</p></div><p class="text-secondary mt-3 text-[22px] font-medium">Enterprise</p><p class="mt-1 text-sm opacity-80">Perfect for large teams, offering scalability, collaboration, and multi-project support</p><a class="btn btn-secondary btn-block mt-5 gap-2.5" href="https://daisyui.com/store/checkout?product=cdd028c5-dd01-41fc-a036-fd73b7a24cc0&amp;aff=Db6q2" target="_blank"><span class="iconify lucide--building-2 size-4"></span>Get enterprise license</a></div><div class="p-5"><p class="text-base-content/70 text-sm">Available for</p><div class="mt-2 space-y-1"><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>HTML</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>React</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>Next.js</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>SvelteKit</p></div></div><p class="text-base-content/70 mt-3 text-sm">License</p><div class="mt-2 space-y-1"><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>Team (multiple developers)</p></div><div class="flex items-center gap-2.5"><span class="iconify lucide--circle-check size-5 text-green-500"></span><p>Can be used in multiple projects</p></div></div></div></div></div><div></div></div>


</body>
</html>