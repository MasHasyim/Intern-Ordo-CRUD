<div class="dropdown">
    <a href="{{ route('backend.setting-email.edit', $item) }}" 
        id="action_change_status_produk"
        class="fa fa-pencil-alt d-flex align-items-center"
        style="color: #FFC107; cursor: pointer;"></a>
    <button class="action-btn" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-expanded="false">
        <img src="{{ asset('images/icon/action.svg') }}" alt="">
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <a data-route="{{ route('backend.setting-email.change-status', $item->id) }}"
            data-status="{{ $item->is_active ? 1 : 0 }}" class="ubahStatus dropdown-item" style="cursor: pointer">
            <i class="fa fa-pencil-alt" style="color: black;"></i>
            <span>Ubah Status</span>
        </a>
        <a data-route="{{ route('backend.setting-email.destroy', $item->id) }}" class="hapus dropdown-item"
            style="cursor: pointer">
            <i class="fa fa-trash" style="color: black;"></i>
            <span>Hapus</span>
        </a>
    </div>
</div>
