<div class="ellipsis-container" style="justify-content: center">
    <button class="ellipsis-button">
        <i class="fa fa-ellipsis-h" style="color: black;"></i>
    </button>
    <div class="modal-ellipsis">
        @if (!$item->is_approved)
            @can('Broken Report approve')
                <a style="cursor: pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                        <path
                            d="M7.99992 1.83594C4.32659 1.83594 1.33325 4.82927 1.33325 8.5026C1.33325 12.1759 4.32659 15.1693 7.99992 15.1693C11.6733 15.1693 14.6666 12.1759 14.6666 8.5026C14.6666 4.82927 11.6733 1.83594 7.99992 1.83594ZM11.1866 6.96927L7.40658 10.7493C7.31325 10.8426 7.18658 10.8959 7.05325 10.8959C6.91992 10.8959 6.79325 10.8426 6.69992 10.7493L4.81325 8.8626C4.61992 8.66927 4.61992 8.34927 4.81325 8.15594C5.00658 7.9626 5.32658 7.9626 5.51992 8.15594L7.05325 9.68927L10.4799 6.2626C10.6733 6.06927 10.9933 6.06927 11.1866 6.2626C11.3799 6.45594 11.3799 6.76927 11.1866 6.96927Z"
                            fill="black" />
                    </svg>
                    <span class="approve-button" style="cursor: pointer"
                        data-route="{{ route('backend.broken-report.approve', $item->id) }}">Approve</span>
                </a>
            @endcan
        @else
            @if (!$item->is_completed)
                <a style="cursor: pointer">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17"
                        fill="none">
                        <path
                            d="M7.99992 1.83594C4.32659 1.83594 1.33325 4.82927 1.33325 8.5026C1.33325 12.1759 4.32659 15.1693 7.99992 15.1693C11.6733 15.1693 14.6666 12.1759 14.6666 8.5026C14.6666 4.82927 11.6733 1.83594 7.99992 1.83594ZM11.1866 6.96927L7.40658 10.7493C7.31325 10.8426 7.18658 10.8959 7.05325 10.8959C6.91992 10.8959 6.79325 10.8426 6.69992 10.7493L4.81325 8.8626C4.61992 8.66927 4.61992 8.34927 4.81325 8.15594C5.00658 7.9626 5.32658 7.9626 5.51992 8.15594L7.05325 9.68927L10.4799 6.2626C10.6733 6.06927 10.9933 6.06927 11.1866 6.2626C11.3799 6.45594 11.3799 6.76927 11.1866 6.96927Z"
                            fill="black" />
                    </svg>
                    <span class="complete-button" style="cursor: pointer"
                        data-route="{{ route('backend.broken-report.complete', $item->id) }}">Complete</span>
                </a>
            @endif
            <a style="cursor: pointer">
                <img src="{{ asset('images/icon/eye.svg') }}" alt="" width="18">
                <span class="reply-button" style="cursor: pointer" data-reply="{{ $item->reject_reason }}">Lihat
                    Balasan</span>
            </a>
        @endif
    </div>
</div>
