<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => ':attribute harus disetujui.',
    'active_url' => ':attribute bukan URL yang valid.',
    'after' => ':attribute harus setelah :date.',
    'after_or_equal' => ':attribute harus setelah atau sama dengan :date.',
    'alpha' => ':attribute hanya boleh alpabet.',
    'alpha_dash' => ':attribute hanya boleh alpabet, angka, dashes dan underscores.',
    'alpha_num' => ':attribute hanya boleh alpabet dan angka.',
    'array' => ':attribute harus sebuah array.',
    'before' => ':attribute harus sebelum :date.',
    'before_or_equal' => ':attribute harus sebelum atau sama dengan :date.',
    'between' => [
        'numeric' => ':attribute harus diantara :min dan :max.',
        'file' => ':attribute harus diantara :min dan :max kilobytes.',
        'string' => ':attribute harus diantara :min dan :max karakter.',
        'array' => ':attribute harus diantara :min dan :max.',
    ],
    'boolean' => 'kolom :attribute harus true atau false.',
    'confirmed' => 'Konfirmasi :attribute tidak cocok.',
    'date' => ':attribute bukan tanggal yang valid.',
    'date_equals' => ':attribute harus tanggal yang sama dengan :date.',
    'date_format' => ':attribute tidak cocok dengan format :format.',
    'different' => ':attribute dan :other harus beda.',
    'digits' => ':attribute harus :digits digit.',
    'digits_between' => ':attribute harus diantara :min dan :max digit.',
    'dimensions' => ':attribute bukan gambar dengan dimensi yang sesuai.',
    'distinct' => 'kolom :attribute telah duplikat.',
    'email' => ':attribute harus alamat email yang valid .',
    'ends_with' => ':attribute harus diakhiri dengan satu dari: :values.',
    'exists' => ':attribute yang dipilih tidak sesuai.',
    'file' => ':attribute harus sebuah berkas.',
    'filled' => 'kolom :attribute harus terisi.',
    'gt' => [
        'numeric' => ':attribute harus lebih besar dari :value.',
        'file' => ':attribute harus lebih besar dari :value kilobytes.',
        'string' => ':attribute harus lebih besar dari :value karakter.',
        'array' => ':attribute harus lebih besar dari :value.',
    ],
    'gte' => [
        'numeric' => ':attribute harus lebih besar dari atau sama dengan :value.',
        'file' => ':attribute harus lebih besar dari atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih besar dari atau sama dengan :value karakter.',
        'array' => ':attribute harus :value atau lebih.',
    ],
    'image' => ':attribute harus berupa gambar.',
    'in' => ':attribute yang dipilih tidak sesuai.',
    'in_array' => 'kolom :attribute tidak ada di :other.',
    'integer' => ':attribute harus sebuah angka bilangan bulat.',
    'ip' => ':attribute harus IP address yang valid .',
    'ipv4' => ':attribute harus IPv4 address yang valid .',
    'ipv6' => ':attribute harus IPv6 address yang valid .',
    'json' => ':attribute harus JSON string yang valid .',
    'lt' => [
        'numeric' => ':attribute harus lebih kecil dari :value.',
        'file' => ':attribute harus lebih kecil dari :value kilobytes.',
        'string' => ':attribute harus lebih kecil dari :value karakter.',
        'array' => ':attribute harus lebih kecil dari :value.',
    ],
    'lte' => [
        'numeric' => ':attribute harus lebih kecil dari atau sama dengan :value.',
        'file' => ':attribute harus lebih kecil dari atau sama dengan :value kilobytes.',
        'string' => ':attribute harus lebih kecil dari atau sama dengan :value karakter.',
        'array' => ':attribute tidak boleh lebih besar dari :value.',
    ],
    'max' => [
        'numeric' => ':attribute tidak boleh lebih besar dari :max.',
        'file' => ':attribute tidak boleh lebih besar dari :max kilobytes.',
        'string' => ':attribute tidak boleh lebih besar dari :max karakter.',
        'array' => ':attribute tidak boleh lebih besar dari :max.',
    ],
    'mimes' => ':attribute harus sebuah berkas dengan jenis: :values.',
    'mimetypes' => ':attribute harus sebuah berkas dengan jenis: :values.',
    'min' => [
        'numeric' => ':attribute setidaknya harus :min.',
        'file' => ':attribute setidaknya harus :min kilobytes.',
        'string' => ':attribute setidaknya harus :min karakter.',
        'array' => ':attribute setidaknya harus :min.',
    ],
    'multiple_of' => ':attribute harus kelipatan dari :value',
    'not_in' => ':attribute yang dipilih tidak sesuai.',
    'not_regex' => 'format :attribute tidak sesuai.',
    'numeric' => ':attribute harus angka.',
    'password' => 'Password tidak sesuai.',
    'present' => 'kolom :attribute harus ada.',
    'regex' => 'format :attribute tidak sesuai.',
    'required' => 'kolom :attribute wajib diisi.',
    'required_if' => 'kolom :attribute wajib diisi saat :other adalah :value.',
    'required_unless' => 'kolom :attribute wajib diisi kecuali kalau :other adalah :values.',
    'required_with' => 'kolom :attribute wajib diisi saat :values ada.',
    'required_with_all' => 'kolom :attribute wajib diisi saat :values ada.',
    'required_without' => 'kolom :attribute wajib diisi saat :values is tidak ada.',
    'required_without_all' => 'kolom :attribute wajib diisi saat semua dari :values tidak ada.',
    'same' => ':attribute dan :other harus sama.',
    'size' => [
        'numeric' => ':attribute harus :size.',
        'file' => ':attribute harus :size kilobytes.',
        'string' => ':attribute harus :size karakter.',
        'array' => ':attribute harus mencapai :size.',
    ],
    'starts_with' => ':attribute harus dimulai dengan satu dari: :values.',
    'string' => ':attribute harus karakter.',
    'timezone' => ':attribute harus sesuai dengan zona.',
    'unique' => ':attribute telah ada.',
    'uploaded' => ':attribute gagal di unggah.',
    'url' => 'format :attribute tidak sesuai.',
    'uuid' => ':attribute harus UUID yang valid.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
