<!-- Modal with btn -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteModalLabel">{{ $title }}</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body">
                <p>{{ $content }}</p>
            </div>
            <input type="hidden" id="idToDelete" value="">
            <div class="modal-footer">
                <button id="closeDeleteModalBtn" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button id="confirmDeleteBtn" type="button" class="btn btn-danger theme-bg gradient">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    const confirmDeleteBtn = document.getElementById('confirmDeleteBtn')
    confirmDeleteBtn.onclick = function() {
        apiService.delete('/api/user/delete/' + document.getElementById('idToDelete').value);
        // const deleteModal = document.getElementById('deleteModal')
        // deleteModal.classList.remove('show')
        // deleteModal.style.display = 'none';
        // deleteModal.ariaHidden = 'true';
        // deleteModal.removeAttribute('aria-modal')
        // document.querySelector('.modal-backdrop').remove()
        document.getElementById('closeDeleteModalBtn').click();
    }
    
</script>