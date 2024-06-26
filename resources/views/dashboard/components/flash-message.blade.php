 @if (session()->has('message'))
     <div x-data="{ show: true }" x-init="setTimeout(() => show = false, 3000)" x-show="show" x-transition.duration.500ms"
         class="alert alert-success text-start">
         {{ session('message') }}
     </div>
 @endif
