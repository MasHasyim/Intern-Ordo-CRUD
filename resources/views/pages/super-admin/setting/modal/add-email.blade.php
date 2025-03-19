<div class="modal fade general" id="addEmail" tabindex="-1" aria-labelledby="addEmailLabel" aria-hidden="true">
    <form method="POST" action="{{ route('backend.setting-email.store') }}" id="formAddEmail">
        @csrf
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title w-100" id="addEmailLabel">Tambah Email</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <img src="{{ asset('images/icon/close-circle-red.svg') }}" alt="">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="wrapp-input-label">
                        <label for="name" class="form-label">Nama</label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Nama"
                            required>
                    </div>
                    <div class="wrapp-input-label">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" id="email" placeholder="Email"
                            required>
                    </div>
                </div>
                <div class="modal-footer gtc">
                    <button type="button" class="btn-outline" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn-primary">Simpan</button>
                </div>
            </div>
        </div>
    </form>
</div>
