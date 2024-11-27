<div>
    <label>Provinsi:</label>
    <select wire:model.live="pilihProvinsi" name="provinsi" class="form-control">
        <option value="">Pilih Provinsi</option>
        @foreach ($provinsi as $item)
            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
        @endforeach
    </select>

    <label>Kabupaten:</label>
    <select wire:model.live="pilihKabupaten" name="kabupaten" class="form-control">
        <option value="">Pilih Kabupaten</option>
        @foreach ($kabupaten as $item)
            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
        @endforeach
    </select>

    <label>Kecamatan:</label>
    <select wire:model.live="pilihKecamatan" name="kecamatan" class="form-control">
        <option value="">Pilih Kecamatan</option>
        @foreach ($kecamatan as $item)
            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
        @endforeach
    </select>

    <label>Kelurahan:</label>
    <select wire:model.live="pilihKelurahan" name="kelurahan" class="form-control">
        <option value="">Pilih Kelurahan</option>
        @foreach ($kelurahan as $item)
            <option value="{{ $item->kode }}">{{ $item->nama }}</option>
        @endforeach
    </select>
</div>
