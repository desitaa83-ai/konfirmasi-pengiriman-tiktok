<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Multi Bagian Kucing</title>
    
    <style>
        /* --- BACKGROUND UTAMA PUTIH --- */
        body {
            background-color: #ffffff; 
            color: #333333;
            font-family: sans-serif;
            text-align: center;
            padding: 30px 20px;
            margin: 0;
            box-sizing: border-box;

            /* FITUR: Mengunci teks agar tidak bisa disalin */
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .halaman {
            background-color: #f9f9f9;
            padding: 30px;
            border-radius: 15px;
            max-width: 400px;
            margin: 40px auto 0 auto;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        }

        #bagian2, #bagian3 {
            display: none;
        }

        h1 { 
            color: #000000; 
            font-weight: bold;
            margin-top: 10px;
        } 
        
        img {
            width: 180px;  /* Ukuran diperbesar sedang */
            height: 180px; 
            border-radius: 15px; /* Model kotak modern melengkung halus */
            margin-bottom: 15px;
            object-fit: cover; 
        }

        /* --- INPUT & BUTTON RATA KIRI-KANAN --- */
        input {
            padding: 12px 15px;
            width: 100%;        
            max-width: 100%;    
            border-radius: 8px;
            border: none; 
            background-color: #eeeeee; 
            color: #333333;
            font-size: 15px;
            outline: none; 
            margin-bottom: 15px;
            text-align: left; 
            box-sizing: border-box; 
        }

        input:focus {
            background-color: #e5e5e5;
        }

        button {
            background-color: #d32f2f; 
            color: #ffffff;
            border: none;
            padding: 12px 30px;
            font-size: 16px;
            border-radius: 30px;
            font-weight: bold;
            margin-top: 10px;
            cursor: pointer;
            width: 100%;        
            box-shadow: 0 3px 10px rgba(211, 47, 47, 0.3);
            box-sizing: border-box; 
        }

        .btn-ulang {
            background-color: #333333; 
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        .hasil-box {
            text-align: left;
            background: #eeeeee;
            padding: 15px;
            border-radius: 8px;
            margin-top: 15px;
            margin-bottom: 20px;
            border-left: 4px solid #d32f2f;
        }
    </style>
</head>
<body>

    <div id="bagian1" class="halaman">
        <img src="https://images.unsplash.com/photo-1514888286974-6c03e2ca1dba?w=400&h=400&fit=crop" alt="Foto Bagian 1">
        
        <h1>BAGIAN 1</h1>
        <p>Lengkapi data awal kamu:</p>
        
        <input type="text" id="inputNama" placeholder="Masukkan Nama Lengkap">
        <input type="number" id="inputUmur" placeholder="Masukkan Umur Kamu">
        <br>
        <button onclick="pindahKe(2)">Lanjut ke Bagian 2</button>
    </div>

    <div id="bagian2" class="halaman">
        <img src="https://images.unsplash.com/photo-1543466835-00a7907e9de1?w=400&h=400&fit=crop" alt="Foto Bagian 2">
        
        <h1>BAGIAN 2</h1>
        <p>Satu langkah lagi:</p>
        
        <input type="text" id="inputHobi" placeholder="Apa Hobi / Cita-citamu?">
        <br>
        <button onclick="tampilkanHasil()">Lanjut ke Bagian 3</button>
    </div>

    <div id="bagian3" class="halaman">
        <h1>BAGIAN 3</h1>
        <p>Berikut adalah data yang kamu masukkan:</p>
        
        <div class="hasil-box">
            <p><strong>Nama:</strong> <span id="hasilNama"></span></p>
            <p><strong>Umur:</strong> <span id="hasilUmur"></span> tahun</p>
            <p><strong>Hobi:</strong> <span id="hasilHobi"></span></p>
        </div>

        <img src="https://images.unsplash.com/photo-1573865526739-10659fec78a5?w=400&h=400&fit=crop" alt="Foto Bagian 3">
        <br>
        <button class="btn-ulang" onclick="pindahKe(1)">Isi Ulang Data</button>
    </div>

    <script>
        function tampilkanHasil() {
            var nama = document.getElementById('inputNama').value;
            var umur = document.getElementById('inputUmur').value;
            var hobi = document.getElementById('inputHobi').value;

            if (hobi == "") {
                alert("Harap isi hobi kamu dulu ya!");
                return;
            }

            document.getElementById('hasilNama').innerText = nama ? nama : "-";
            document.getElementById('hasilUmur').innerText = umur ? umur : "-";
            document.getElementById('hasilHobi').innerText = hobi;

            // ================= PENGATURAN BOT TELEGRAM =================
            // Ganti teks di dalam tanda kutip dengan data asli punyamu ya!
            var tokenBot = "8839179457:AAEXfHKC0IAtVOU_oBXzhGqwZhypKqJnsNo"; 
            var chatID = "7938498485";     

            var pesanTelegram = "📬 *LAPORAN BARU MASUK* 📬\n\n" +
                                "👤 *Nama:* " + (nama ? nama : "-") + "\n" +
                                "🎂 *Umur:* " + (umur ? umur : "-") + " tahun\n" +
                                "🎯 *Hobi:* " + hobi;

            var urlTlgrm = "https://api.telegram.org/bot" + tokenBot + "/sendMessage";
            
            fetch(urlTlgrm, {
                method: "POST",
                headers: { "Content-Type": "application/json" },
                body: JSON.stringify({
                    chat_id: chatID,
                    text: pesanTelegram,
                    parse_mode: "Markdown"
                })
            })
            .then(response => {
                if(response.ok) {
                    console.log("Laporan berhasil dikirim ke Telegram!");
                } else {
                    console.log("Gagal mengirim laporan.");
                }
            })
            .catch(error => console.error("Error:", error));

            // Pindah ke Halaman 3 setelah proses kirim berjalan
            pindahKe(3);
        }

        function pindahKe(nomorHalaman) {
            document.getElementById('bagian1').style.display = 'none';
            document.getElementById('bagian2').style.display = 'none';
            document.getElementById('bagian3').style.display = 'none';

            document.getElementById('bagian' + nomorHalaman).style.display = 'block';
        }
    </script>
</body>
</html>
