# 📖 Guide Book Piranti Cerdas

**Proyek:** Piranti Cerdas  
**Disusun Oleh:**  
- Zamah Sari, S.T, M.T  
- Imelda Azaliya Rahma  
- Muhammad Nizar Zulmi Rohmatulloh  
**Diselenggarakan Oleh:** Lab. Informatika, Universitas Muhammadiyah Malang  

---

## 📋 Daftar Isi
1. [Pengenalan Mikrokontroler & Input/Output](#bab-1-pengenalan-mikrokontroler--inputoutput)
2. [Digital dan Analog Input/Output](#bab-2-digital-dan-analog-inputoutput)
3. [Koneksi WiFi](#bab-3-koneksi-wifi)
4. [Protokol Komunikasi](#bab-4-protokol-komunikasi)
5. [Internet of Things (IoT)](#bab-5-internet-of-things-iot)

---

## 📜 BAB 1: Pengenalan Mikrokontroler & Input/Output
- **NodeMCU ESP32**: Mikrokontroler dengan modul WiFi bawaan yang mendukung IoT.  
- **Pin Mikrokontroler**:  
  - Input: Untuk menerima sinyal dari perangkat eksternal.  
  - Output: Untuk mengontrol perangkat seperti LED dan motor.  
- **Arduino IDE**: Alat pemrograman berbasis C++ untuk mikrokontroler.  
  - Fitur: Editor kode, upload program, dan Serial Monitor.  

---

## 📜 BAB 2: Digital dan Analog Input/Output
- **I/O Digital dan Analog**: Mengolah sinyal digital (0/1) dan analog (kontinu).  
- **Komponen Utama**:  
  - Input: MPU6050 (sensor gerak), LDR (sensor cahaya).  
  - Output: LED, Buzzer.  
- **Konversi Sinyal**:  
  - ADC: Mengubah sinyal analog ke digital.  
  - DAC: Mengubah sinyal digital ke analog.  

---

## 📜 BAB 3: Koneksi WiFi
- **ESP32 WiFi**: Menggunakan library `WiFi.h` untuk koneksi.  
- **Fungsi Utama**:  
  - `WiFi.begin()`: Menghubungkan ke jaringan WiFi.  
  - `WiFi.status()`: Memeriksa status koneksi.  
- **Status Koneksi WiFi**: Dari idle hingga terhubung (WL_CONNECTED).  

---

## 📜 BAB 4: Protokol Komunikasi
- **HTTP**: Digunakan untuk pengiriman data GET/POST ke server.  
- **MQTT**: Protokol ringan untuk komunikasi IoT berbasis publish-subscribe.  
  - Broker: Server yang mengatur komunikasi antar perangkat.  
  - QoS (Quality of Service): Menjamin pengiriman data dengan tingkat keandalan tertentu.  

---

## 📜 BAB 5: Internet of Things (IoT)
- **Relay**: Saklar otomatis untuk mengontrol perangkat bertegangan tinggi.  
- **Blynk**: Platform mobile untuk mengontrol perangkat IoT.  
  - Fitur: Drag-and-drop untuk membuat antarmuka pengguna.  
  - Mendukung kontrol dari jarak jauh melalui internet.  

---

## 📘 Lisensi
Hak cipta Universitas Muhammadiyah Malang. Materi disusun untuk keperluan pembelajaran dan pengembangan perangkat pintar.  

---

Jika ada pertanyaan lebih lanjut, hubungi Lab. Informatika Universitas Muhammadiyah Malang.
