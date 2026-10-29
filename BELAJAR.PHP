<!DOCTYPE html>
<html>
    <head>
        <META> </META>

    </head>
    <link rel="stylesheet" href="style.css">
    <body>
        
    <h1 style="text-align: center;">FROM BIODATA</h1>
    <Form action="tampil.php" method="post" >
                <div>
        <LABEl For="nama"> nama</LABEl>
        <input type="text" name="nama" placeholder="masukan nama">
        </div>
        <div>
        <LABEl For="nama"> email</LABEl>
        <input type="text" name="email" placeholder="masukan email">
        </div>
        

 <div>
        <LABEl For="password"> password</LABEl>
        <input type="password" name="email" placeholder="masukan password">
        </div>
        

        <div class="group-pilihan">
            <label for="gender"></label>
            <input type="radio" name="gender" value="laki-laki" checked>laki-laki
            <input type="radio" name="gender" value="perempuan">perempuan

        </div class ="garoup">
        <label for="jurusan">jurusan</label>
        <select name="jurusan">
            <option value="">PILIH JURUSAN</option>
            <option value="informatiika"  selected>informatiika</option>
            <option value="industri">industri</option>
            <option value="sipil">sipil</option>
        </select>


        </div>
        <div class="group">
            <label for="minat">minat</label>
            <input type="checkbox" name="minat" value="coding" checked>coding
            <input type="checkbox" name="minat" value="database">database
            <input type="checkbox" name="minat" value="kalkulus">kalkulus
            <input type="checkbox" name="minat" value="progaming">progaming
            <input type="checkbox" name="minat" value="web developer">web developer
        </div>

        <div class="group">
            <label for=" alamat">alamat</label>
            <textarea name="alamat" rows="4" placeholder="masukan alamat anda"></textarea>

            <button>open</button>
            <button>close</button>
        </div>
    </Form>
    </body>
</html>