<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h3 class="modal-title" id="exampleModalLabel">Tambah Spesialis Baru</h3>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="{{ route('spesialis.store') }}" method="POST" role="form">
                @csrf
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">Nama spesialis</label>
                        <input type="text" class="form-control" name="nama_spesialis"
                            placeholder="Masukan Nama Spesialis">
                    </div>
                    <div class="form-group">
                        <label for="">Akomodasi</label>
                        <input type="number" class="form-control" name="akomodasi" placeholder="Akomodasi">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-info text-white">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
