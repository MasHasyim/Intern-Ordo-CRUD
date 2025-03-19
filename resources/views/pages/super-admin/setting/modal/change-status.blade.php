<div class="modal fade general" id="changeStatus" tabindex="-1" aria-labelledby="changeStatusLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100" id="changeStatusLabel">Ubah Status</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <img src="{{ asset('images/icon/close-circle-red.svg') }}" alt="">
                </button>
            </div>
            <div class="modal-body">
                <div class="wrapp-input-label">
                    <label for="validationCustom03" class="form-label">Status</label>
                    <div class="wrapp-select">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Active</option>
                            <option value="1">Active</option>
                            <option value="2">Inactive</option>
                        </select>
                    </div>
                    {{-- <div class="invalid-feedback">
                        Please input status.
                    </div> --}}
                </div>
            </div>
            <div class="modal-footer gtc">
                <button type="button" class="btn-outline" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>


<script>
    
</script>