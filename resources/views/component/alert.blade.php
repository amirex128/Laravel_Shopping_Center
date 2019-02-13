<div class="container">
        @if (session()->has(strval($session)))
            <div class="alert alert-{{$slot}} mt-5">
                {{session(strval($session))}}
            </div>
        @endif
</div>