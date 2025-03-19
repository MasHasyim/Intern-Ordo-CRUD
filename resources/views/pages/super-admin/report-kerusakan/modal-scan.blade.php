<div class="modal fade general2" id="scanReortRusak" tabindex="-1" aria-labelledby="scanReortRusakLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title w-100" id="scanReortRusakLabel">Tambah Report</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="fa fa-times" style="font-size: 15px" id="closeScan"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="wrapp-scan mb-3" style="background: gray">
                    <div class="w-100 rounded" id="qr-reader"></div>
                </div>
                <div class="mt-2">
                    <input type="text" class="form-control" placeholder="Input kode Trolley" id="code">
                    {{-- <div class="invalid-feedback">
                        Please input kode trolley.
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</div>

@push('script')
    <script>
        $(document).ready(async function() {

            let codes = [];

            async function fetchCodes(url) {
                const response = await fetch(url);
                const data = await response.json();
                return data.data.map(item => item.code);
            }

            const machineCodes = await fetchCodes("/api/v1/datamaster/machines");
            const trolleyCodes = await fetchCodes("/api/v1/datamaster/trolleys");
            const truckCodes = await fetchCodes("/api/v1/datamaster/trucks");

            codes = codes.concat(machineCodes, trolleyCodes, truckCodes);

            function onScanFailure(error) {}
            let html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: {
                        width: 250,
                        height: 250
                    }
                },
                /* verbose= */
                false);

            async function onScanSuccess(decodedText, decodedResult) {
                console.log(`Code matched = ${decodedText}`, decodedResult);
                let code = decodedText;
                await foundCode(code)
            }

            $(document).on('keyup', '#code', async function(e) {
                if (e.keyCode === 13) {
                    let code = $(this).val();
                    await foundCode(code)
                }
            });

            $('#scanReortRusak').on('shown.bs.modal', function() {
                html5QrcodeScanner.render(onScanSuccess, onScanFailure);
            });

            $('#scanReortRusak').on('hidden.bs.modal', function() {
                html5QrcodeScanner.clear();
            });

            async function foundCode(code) {
                if (codes.includes(code)) {

                    window.location.href = `/backend/broken-report/create?code=${code}`;

                } else {
                    alert('Kode tidak valid');
                }
            }
        });
    </script>
@endpush
