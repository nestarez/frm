<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">¿Esta seguro que desea eliminar este paciente?</h4>
            </div>
            <div class="modal-body">
                <button type="button" class="btn btn-primary si" onclick="delForm(true)">Si</button>
                <button type="button" class="btn btn-default no" onclick="delForm(false)">No</button>                
            </div>
        </div>
    </div>
</div>