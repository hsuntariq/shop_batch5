@if (session()->has('message'))
    <div class="w-25 bg-dark p-3 rounded-5 text-white position-fixed" style="right: 0">
        <h4>{{session('message')}}</h4>
    </div>
@endif