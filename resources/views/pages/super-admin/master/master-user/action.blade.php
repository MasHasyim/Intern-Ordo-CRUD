<div class="menu-button">
    <a class="fa fa-pencil-alt" href="{{ route('backend.datamaster.user.edit',$item->id) }}"
        style="color: #FFC107; cursor: pointer;"></a>
    <a class="fa fa-eye" href="{{ route('super-admin.master.user.detail') }}" style="color: #28A745; cursor: pointer;"></a>
    <div class="ellipsis-container">
        <button class="ellipsis-button">
            <i class="fa fa-ellipsis-v" style="color: black;"></i>
        </button>
        <div class="modal-ellipsis">
            <a style="cursor: pointer" class="ubahStatus" data-id="{{ $item->id }}"
                data-status="{{ $item->status }}">
                <i class="fa fa-pencil-alt" style="color: black;"></i>
                <span>Ubah Status</span>
            </a>
            <form id="delete-form-{{ $item->id }}"
                action="{{ route('backend.datamaster.user.destroy', $item->id) }}" method="POST"
                style="display: none;">
                @csrf
                @method('DELETE')
            </form>
            <a href="#"
                onclick="event.preventDefault(); document.getElementById('delete-form-{{ $item->id }}').submit();">
                <i class="fa fa-trash" style="color: black;"></i>
                <span>Hapus</span>
            </a>
        </div>
    </div>
</div>
