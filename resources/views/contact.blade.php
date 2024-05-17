<x-layout>
    <form class="formContact" action="{{ route('contact.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="" class="form-label">Nombre</label>
            <input
                type="text"
                class="form-control"
                name="nombre"
                id=""
                
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Apellidos</label>
            <input
                type="text"
                class="form-control"
                name="apellido"
                id=""
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Email</label>
            <input
                type="email"
                class="form-control"
                name="email"
                id=""    
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Teléfono</label>
            <input
                type="number"
                class="form-control"
                name="telefono"
                id=""
            />
            
        </div>
        <div class="mb-3">
            <label for="" class="form-label">Deja tu comentario</label>
            <textarea name="comentario" id=""></textarea>
            
        </div>

        <button class="btn" type="submit">Enviar</button>
    </form>
    







</x-layout>