 @props(['bg' => '', 'textLabel' => '', 'link' => ''])
 <div class="small-box {{ $bg }}">
     <div class="inner">
         {{ $slot }}
         <h2 wire:loading.class='d-none'>{{ $textLabel }}</h2>
     </div>
     <div class="icon">
         <i class="ion ion-bag"></i>
     </div>
     <a href="{{ $link != '' ? route($link) : '#' }}" wire:navigate class="small-box-footer">More info
         <i class="fas fa-arrow-circle-right"></i>
     </a>
 </div>
