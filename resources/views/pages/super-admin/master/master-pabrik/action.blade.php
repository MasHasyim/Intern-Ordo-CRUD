<div class="dropdown">
    <a class="fa fa-pencil-alt" href="{{ route('backend.datamaster.factories.edit', $item->id) }}"
        style="color: #FFC107; cursor: pointer;"></a>
    <a data-route="{{ route('backend.datamaster.factories.destroy', $item->id) }}" class="fa fa-trash hapus"
        style="color: #DC3545; cursor: pointer" ></a>

</div>
