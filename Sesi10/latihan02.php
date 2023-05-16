<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 02</title>
</head>
<body>
   
    <form name="Latihan02" id="Latihan02" method="POST" onsubmit="return checkform()">
        <div>
            NIM
            <input type="text" id="nim" name="txNIM">
        </div>
        <div>
            Nama
            <input type="text" id="nama" name="txNAMA">
        </div>
        <div>
            Jenis Kelamin
            <input type="radio" id="JK" name="txJK" value="L">Laki-Laki
            <input type="radio" id="JK" name="txJK" value="P">Perempuan
        </div>
        <div>
            Jurusan
            <select id="jurusan" name="txJURUSAN">
                <option value="KAB">KAB</option>
                <option value="MTI">MTI</option>
                <option value="DKV">DKV</option>
                <option value="DGM">DGM</option>
                <option value="TIPAR">TIPAR</option>
                <option value="SK">SK</option>
            </select>   
        </div>
        <div>
            Hobi
            <input type="checkbox" id="txhobi" name="musik">Musik
            <input type="checkbox" id="txhobi" name="tari">Tari
            <input type="checkbox" id="txhobi" name="membaca">Membaca
            <input type="checkbox" id="txhobi" name="tidur">Tidur
            <input type="checkbox" id="txhobi" name="joging">Joging
            <input type="checkbox" id="txhobi" name="lari">Lari
            <input type="checkbox" id="txhobi" name="menangis">Menangis
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script>
        function checkform(){
            let f = document.getElementById("Latihan02").elements;
            let nim = f.nim.value;
            let nama = f.nama.value;
            let jeniskelamin = f.JK.value;
            let jurusan = f.jurusan.value;
            let hobi_musik = f.txhobi[0].checked;
            let hobi_tari = f.txhobi[1].checked;
            let hobi_membaca = f.txhobi[2].checked;
            let hobi_tidur = f.txhobi[3].checked;
            let hobi_joging = f.txhobi[4].checked;
            let hobi_lari = f.txhobi[5].checked;
            let hobi_menangis = f.txhobi[6].checked;
            
            
           
           
            console.log("NIM: "+nim);  
            console.log("NAMA: "+nama);
            console.log("JENIS KELAMIN: "+jeniskelamin); 
            console.log("JURUSAN: "+jurusan); 
            console.log("HOBI MUSIK: "+hobi_musik); 
            console.log("HOBI TARI: "+hobi_tari);    
            console.log("HOBI MEMBACA: "+hobi_membaca);  
            console.log("HOBI TIDUR: "+hobi_tidur); 
            console.log("HOBI JOGING: "+hobi_joging);  
            console.log("HOBI LARI: "+hobi_lari); 
            console.log("HOBI MENANGIS: "+hobi_menangis);                    
            return false;
        }
    </script>
</body>
</html>

