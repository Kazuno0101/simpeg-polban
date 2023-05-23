@component('mail::message')
# Pemberitahuan Kenaikan Jabatan!
Kepada Yth. {{$data->dosen->nama}},
<br>
<br>
Pengajuan kenaikan jabatan anda telah <strong>{{$data->status}}</strong>.
@component('mail::button', ['url' => route('kenaikan')])
Masuk
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent