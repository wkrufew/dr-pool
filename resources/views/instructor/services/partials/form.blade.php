
<div class="mb-4">
    {!! Form::label('title', 'Tittle') !!}
    {!! Form::text('title', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('title') ? '  border-red-600' : '')]) !!}
    @error('title')   
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
        <strong class="font-bold">Ups!</strong>
        <span class="block sm:inline">{{ $message }}</span>
      </div>
        @enderror
        
</div>

<div class="mb-4">
    {!! Form::label('slug', 'Slug') !!}
    {!! Form::text('slug', null, ['readonly' => 'readonly' ,'class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('slug') ? '  border-red-600' : '')]) !!}
    @error('slug')   
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
        <strong class="font-bold">Ups!</strong>
        <span class="block sm:inline">{{ $message }}</span>
      </div>
@enderror
</div>

<div class="mb-4">
    {!! Form::label('description', 'Description') !!}
    {!! Form::textarea('description', null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('description') ? '  border-red-600' : '')]) !!}
    @error('description')   
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
        <strong class="font-bold">Ups!</strong>
        <span class="block sm:inline">{{ $message }}</span>
      </div>
@enderror
</div>



<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <div>
        {!! Form::label('category_id', 'Category:') !!}
        {!! Form::select('category_id', $categories, null, ['class' => 'form-input block w-full mt-1 rounded-lg' . ($errors->has('category_id') ? '  border-red-600' : ''),'placeholder'=>'Select a category']) !!}
        @error('category_id')   
            <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
                <strong class="font-bold">Ups!</strong>
                <span class="block sm:inline">{{ $message }}</span>
            </div>
        @enderror
    </div> 
    <div class="mx-auto">
        <div>Logo:</div>
        {!! Form::file('file1', ['class' => 'form-input w-full mt-2' . ($errors->has('file1') ? '  border-red-600' : ''), 'accept' => 'image/*', 'id' => 'file1']) !!}
            @error('file1')   
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror
    </div> 

    <div class="mx-auto">
        <figure class="">
            @isset($service->logo)
                <img id="picture2" style="border-radius: 8px;" src="{{Storage::url($service->logo)}}" width="100px" alt="">
            @else 
                 <img id="picture2" style="border-radius: 8px;" src="https://cdn.pixabay.com/photo/2020/04/06/13/37/coffee-5009730_960_720.png" width="100px" alt="">
            @endisset

        </figure>
        <script>
            //Cambiar imagen
            document.getElementById("file1").addEventListener('change', cambiarImagen);
            function cambiarImagen(event){
                var file1 = event.target.files[0];
                var reader = new FileReader();
                reader.onload = (event) => {
                    document.getElementById("picture2").setAttribute('src', event.target.result); 
                };
                reader.readAsDataURL(file1);
            }
        </script>
    </div>
</div>

<h1 class="text-2xl font-bold mb-2 mt-8">Cover Photo Service</h1>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <figure>
        @isset($service->image)
            <img id="picture" class="w-full h-64 object-cover object-center rounded-lg" src="{{Storage::url($service->image->url)}}" alt="{{$service->title}}">
        @else 
            <img id="picture" class="w-full h-64 object-cover object-center rounded-lg" src="https://images.pexels.com/photos/2034335/pexels-photo-2034335.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" alt="">
        @endisset
    </figure>
    <div class="my-auto">
            <p class="mb-2"><b>Note: </b> Select a rectangular image for a visualization </p>
            {!! Form::file('file', ['class' => 'form-input w-full' . ($errors->has('file') ? '  border-red-600' : ''), 'accept' => 'image/*', 'id' => 'file']) !!}
            @error('file')   
                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mt-1" role="alert">
                    <strong class="font-bold">Ups!</strong>
                    <span class="block sm:inline">{{ $message }}</span>
                </div>
            @enderror
    </div>
</div>