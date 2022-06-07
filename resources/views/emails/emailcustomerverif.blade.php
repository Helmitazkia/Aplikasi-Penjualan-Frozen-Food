@component('mail::message')
Mohon Verifikasi Akun Anda , Untuk Bisa Login Ke E-commerce Kami.

Hal Ini Bagian Dari Proses Registarsi Akun Baru BabaFresh Sadeng
,Kami Perlu Memverifikasi Detail Anda.
<br>
<br>
Verifikasi Dilakukan Cara <br>Klik" "Verifikasi Email Saya"<br>
Pada Link di bawah

@component('mail::button', ['url' => route('verify_email')])
VERIFIKASI EMAIL SAYA
@endcomponent

Terima Kasih,<br>
{{ config('app.name') }}
@endcomponent
