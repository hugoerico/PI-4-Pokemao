
       

          <form  method="POST" action="{{ route('logout') }}">
            @csrf

          
            <x-responsive-nav-link :href="route('logout')" class="text-white navbar-nav d-flex " style="text-decoration: underline;" onclick="event.preventDefault();
                                        this.closest('form').submit();" >
              {{ __('Click aqui agora') }}
            </x-responsive-nav-link>
          </form>

      
        

    

