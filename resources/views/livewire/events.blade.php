<div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td> 
                        <button onclick="confirmar(1)" class="btn btn-danger">Eliminar</button> 
                    </td>
                </tr>
            </tbody>
        </table>
</div>
<script>

    function confirmar(id){
        var op = confirm("¿Desea eliminar el registro?");
        if(op == true){
            window.livewire.emit('destroy', id);
        }
    }

    document.addEventListener('livewire:load', function(){
        livewire.on("destroy-result", event => {
            alert(event);
        })
    });
</script>