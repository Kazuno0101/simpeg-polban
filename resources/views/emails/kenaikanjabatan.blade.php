@component('mail::message')
# Pemberitahuan Kenaikan Jabatan!
Kepada Yth. {{$data->dosen->nama}},
<br>
<br>
Pengajuan kenaikan jabatan anda telah <strong>{{$data->status}}</strong>.
@component('mail::button', ['url' => 'https://laraveltuts.com'])
Blog
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent