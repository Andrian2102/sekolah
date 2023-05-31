<!DOCTYPE html>
    <html>
        <head>
            <title>Manage Siswa</title>
        </head>
        <body>
            <h1>Manage Siswa</h1>
                <table>
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>Jurusan</th>
                            <th>Foto</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswa as $siswa)
                        <tr>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->kelas }}</td>
                            <td>{{ $siswa->jurusan }}</td>
                            <td>{{ $siswa->foto }}</td>
                            <td>
                                <a href="">Edit</a>
                                <form action="" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
        </body>
    </html>