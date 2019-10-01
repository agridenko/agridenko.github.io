@include('header')

        <div class="position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="work m-b-md col-md-12">
                    @foreach($tasks as $task)
                    <div class="items col-md-4">
                            <div class="title">{{ $task->title }}</div>
                            <div class="img">{{ $task->image }}<img src="" alt=""></div>
                            <div class="text">{{ $task->body }}</div>
<pre><?print_r($task);?></pre>
                    </div>
                    @endforeach
                </div>


            </div>
        </div>
        
@include('footer')