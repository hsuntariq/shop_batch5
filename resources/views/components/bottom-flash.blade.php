@if (session()->has('bottom'))
    <p class="text-danger fw-bolder">
        {{session('bottom')}}
    </p>
@endif