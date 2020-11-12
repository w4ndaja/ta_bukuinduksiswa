<x-form :action="route('school-identity.store')">
    <div class="form-group row">
        <label class="col-lg-3">Nama Madrasah</label>
        <div class="col-lg-9">
            <x-input name="name" :placeholder="'Masukkan '.__('validation.attributes.name')" :value="$schoolIdentity->name" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Alamat</label>
        <div class="col-lg-9">
            <x-input name="address" :placeholder="'Masukkan '.__('validation.attributes.address')" :value="$schoolIdentity->address" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Desa/Kelurahan</label>
        <div class="col-lg-9">
            <x-input name="village" :placeholder="'Masukkan '.__('validation.attributes.village')" :value="$schoolIdentity->village" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Kecamatan</label>
        <div class="col-lg-9">
            <x-input name="distric" :placeholder="'Masukkan '.__('validation.attributes.distric')" :value="$schoolIdentity->distric" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Kabupaten/Kota</label>
        <div class="col-lg-9">
            <x-input name="city" :placeholder="'Masukkan '.__('validation.attributes.city')" :value="$schoolIdentity->city" />
        </div>
    </div>
    <div class="form-group row">
        <label class="col-lg-3">Provinsi</label>
        <div class="col-lg-9">
            <x-input name="province" :placeholder="'Masukkan '.__('validation.attributes.province')" :value="$schoolIdentity->province" />
        </div>
    </div>
    <div class="form-group">
        <button class="btn btn-success" type="submit">Simpan</button>
    </div>
</x-form>
