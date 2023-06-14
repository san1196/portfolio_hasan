<form method="post" action="/email/send">
    {{ csrf_field() }}
    <input name="nama" type="text" required placeholder="Nama">
    <input name="email" type="email" required placeholder="Alamat Email">
    <button type="submit">Kirim</button>
</form>