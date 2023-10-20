<x-layout>
    <x-flash/>
    <div class="d-flex">
        <x-admin_sidebar/>
        <div class="form w-100">

        <form action="/insert-prod" method="POST" enctype="multipart/form-data" class="w-50 mx-auto rounded p-3 mt-4" style="border:2px solid #000">
            @csrf
            <h1 class="display-3 text-center" style="color:#898989">
                Add Your Product
            </h1>
        <label for="">Product Name</label>
        <input class="form-control" type="text" placeholder="Product Name..." name="name" id="">
        @error('name')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
        @enderror
        <label for="">Product Price</label>
        <input class="form-control" type="number" placeholder="Product Price..." name="price" id="">
        @error('price')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
        @enderror
        <label for="">Product Description</label>
        <textarea class="form-control" name="description" id="" cols="30" rows="5"></textarea>
        @error('description')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
        @enderror
        <label for="">Product Category</label>
        <select class="form-control" name="category">
            <option value="men">Men</option>
            <option value="women">Women</option>
            <option value="kids">Kids</option>
        </select>
        @error('category')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
        @enderror
        <label for="">Product Image</label>
        <input class="form-control" type="file" placeholder="Product Name..." name="image" id="">
        @error('image')
            <p class="text-danger fw-bolder">
                {{$message}}
            </p>
        @enderror
        <button class="btn my-2 btn-dark w-100" style="">
            Add Product
        </button>
    </form>
</div>

</div>


</x-layout>