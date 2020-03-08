@include('backend.masster.header')
    <main class="app-content">
      <div class="app-title">
        <div>
        <h1><i class="fa fa"></i>Hello   {{ Auth::User()->name}}.</h1>
        </div>
        <ul class="app-breadcrumb breadcrumb">
          <li class="breadcrumb-item"><i class="fa fa-home fa-lg"></i></li>
        <li class="breadcrumb-item"><a href="{{ route('home.index') }}">Home</a></li>
        </ul>
      </div>



      
      @yield('content')




    </main>
    @include('backend.masster.footer')