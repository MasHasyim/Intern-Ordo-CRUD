<div class="menu-button">
    @can('Master Truck update')
        <a class="fa fa-pencil-alt" href="{{ route('backend.datamaster.trucks.edit', $item->id) }}"
            style="color: #FFC107; cursor: pointer;"></a>
    @endcan
    @can('Master Truck detail')
        <a class="fa fa-eye" href="{{ route('backend.datamaster.trucks.show', $item->id) }}"
            style="color: #28A745; cursor: pointer;"></a>
    @endcan
    <div class="ellipsis-container">
        <button class="ellipsis-button">
            <i class="fa fa-ellipsis-h" style="color: black;"></i>
        </button>
        <div class="modal-ellipsis">
            <a class="history" href="{{ route('backend.datamaster.trucks.history', $item) }}" style="cursor: pointer">
                <i class="fa fa-history" style="color: black;"></i>
                <span>Riwayat</span>
            </a>
            <a class="print-qr" data-code="{{ $item->code }}" style="cursor: pointer">
                <i class="fa fa-print" style="color: black;"></i>
                <span>Print QR Customer</span>
            </a>
            <a class="download" data-code="{{ $item->code }}" data-name="{{ $item->brand }}" style="cursor: pointer">
                <i class="fa fa-download" style="color: black;"></i>
                <span>Download QR</span>
            </a>
            @can('Master Truck change-status')
                <a data-route="{{ route('backend.datamaster.trucks.change-status', $item->id) }}"
                    data-status="{{ $item->is_active ? 1 : 0 }}" class="ubahStatus" style="cursor: pointer">
                    <i class="fa fa-pencil-alt" style="color: black;"></i>
                    <span>Ubah
                        Status</span>
                </a>
            @endcan
            @can('Master Truck delete')
                <a data-route="{{ route('backend.datamaster.trucks.destroy', $item->id) }}" class="hapus"
                    style="cursor: pointer">
                    <i class="fa fa-trash" style="color: black;"></i>
                    <span>Hapus</span>
                </a>
            @endcan
        </div>
    </div>
</div>
