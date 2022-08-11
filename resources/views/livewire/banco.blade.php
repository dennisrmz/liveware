<div>
    <div class="row">
        <div class="col">
            <label for="">Capital del Banco</label>
            <span>${{ $capital }}</span>
            <br>
            <button wire:click="$emitTo('tarjeta', 'asignar', {{$capital}})" class="btn btn-primary">Asignar Credito</button>
        </div>
    </div>
    <livewire:tarjeta />
</div>
