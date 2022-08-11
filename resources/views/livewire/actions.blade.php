<div>
    <label for="nombre">Nombre</label>
    <input type="text" wire:keydown.enter="$set('nombre', 'Fax')">
    <br>
    <button wire:click="cambiarNombre('Melissa')">Cambiar</button>
    Nombre:  {{ $nombre }}

</div>
