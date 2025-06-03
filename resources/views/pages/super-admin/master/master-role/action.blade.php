<div class="menu-button">
    <a class="fa fa-pencil-alt" href="{{ route('backend.datamaster.roles.edit', $item->id) }}"
        style="color: #FFC107; cursor: pointer;"></a>
    <div class="ellipsis-container">
        <button class="ellipsis-button">
            <i class="fa fa-ellipsis-v" style="color: black; cursor: pointer"></i>
        </button>
        <div class="modal-ellipsis">
            <a class="ubahStatus" data-id="{{ $item->id }}" data-status="{{ $item->status }}"
                style="cursor: pointer">
                <i class="fa fa-pencil-alt" style="color: black;"></i>
                <span>Change Status</span>
            </a>
            <form id="delete-form-{{ $item->id }}"
                action="{{ route('backend.datamaster.roles.destroy', $item->id) }}" method="POST"
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
