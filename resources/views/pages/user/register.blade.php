<x-layout>
    <x-flash/>
    <x-navbar/>
    <div class="row container mx-auto mt-4 mt-4 col-md-8">
        <h1 class="display-4 text-center text-capitalize">
            A Great place to be!
        </h1>
        <div class="col-md-6 mt-4">
            <h1 class="display-4 text-center">
                
            </h1>
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Username</label>
                <input type="text" name="username" class="form-control">
                <label for="">Email</label>
                <input type="email" name="email" class="form-control">
                <label for="">Password</label>
                <input type="text" name="password" class="form-control">
                <label for="">Password</label>
                <input type="file" name="image" class="form-control">
                <button class="btn my-2 btn-dark w-100">
                    Register
                </button>
            </form>
        </div>
        <div class="col-md-6">
            <img height="100%" style="object-fit: cover" width="100%" src="https://www.zuplic.com/wp-content/uploads/2018/07/eCommerce-Animated-GIF.gif" alt="">
        </div>
    </div>
</x-layout>