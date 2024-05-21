 <aside class="main-sidebar bg-app elevation-4">
     <a href="/" class="brand-link bg-color-secondary">
         <img src="{{ asset('logo.svg') }}" alt="Logo" class="brand-image mt-1" style="opacity: .8">
         <strong>
             <span class="brand-text font-weight-light text-bold h3 text-white text-uppercase">
                 {{ config('app.name') }}
             </span>
         </strong>
     </a>
     <div class="sidebar mt-4">
         <nav class="mt-2">
             <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                 data-accordion="false">
                 <x-navigation.nav-link class="nav-link" href="{{ route('dashboard') }}" wire:navigate
                     :active="request()->routeIs(['dashboard'])">
                     <i class="fas fa-chart-area    "></i>
                     <p>Dashboard</p>
                 </x-navigation.nav-link>
                 <x-navigation.nav-link class="nav-link" href="{{ route('member') }}" wire:navigate :active="request()->routeIs(['member'])">
                     <i class="fa fa-users" aria-hidden="true"></i>
                     <p>Membres</p>
                 </x-navigation.nav-link>
             </ul>
         </nav>
     </div>
 </aside>
