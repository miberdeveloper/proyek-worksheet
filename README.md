# Worksheet proyek 1
Worksheet ini digunakan untuk mengerjakan proyek per bagian tim yang sudah dibagi

Terdapat 7 tim antara lain : 
1. **Admin** (Agus P, Helmy, Grandis)
2. **Personalia** (Dany, Saras, Dwi, Ira)
3. **Pergudangan** (Odi, Renaldy, Prestyan, Diki Yusron, Diah)
4. **Keuangan** (Maha, Winda, Julia, Evy)
5. **E-Commerce** (Nailuz, Endah, Dimas, Agusta, Ivan, Wahyu)
6. **Simpan Pinjam** (Friza, Yuli, Zaki)
7. **Login & Register** (Diki P, Amadeus, Yuzza)

---

# Tutorial dan Refrensi Github
- [Refrensi](https://github.com/miberdeveloper/proyek1#melakukan-remote-dan-clone-file)

# Tata cara install, menginputkan dan mengambil data di github

1.  Melakukan clone data
   ``` bash 
   git clone https://github.com/miberdeveloper/proyek-worksheet.git -b *nama_branch* 
   ```

2. Daftar branch yang terdaftar : 
   - admin
   - personalia
   - pergudangan
   - keuangan
   - e_commerce
   - simpan_pinjam
   - login_register

3. Melakukan remote pada folder/data yang sudah di clone, seperti dibawah

#### Admin
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git 
```

#### Personalia
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git
```

#### Pergudangan
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git
```

#### Keuangan
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git 
```

#### E-Commerce
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git
```

#### Simpan Pinjam
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git
```

#### Login & Register
```bash
git remote add *nama_mahasiswa* https://github.com/miberdeveloper/proyek-worksheet.git
```

4. Melakukan **Add**, **Commit**, **pull** dan **push** data
   
- Add

```bash
git add .
```
> Titik ( . ) adalah berarti dia menambahkan data seluruhnya/menambahkan seluruh data dan folder

- Commit
  
```bash
git commit -m "Komentar"
```
> Komentar diisi bedasarkan pekerjaan yang sudah di lakukan

- Pull
  
```bash
git pull
```
> Mengambil data/perubahan yang dilakukan oleh anggota/team lain, harus melakukan pull terlebih dahulu sebelum melakukan push

- Push

```bash
git push *nama_mahasiswa* *nama_branch*
```
> git push digunakan untuk mengupload project ke github.com. pastikan git remote sudah dibuat dan branch sesuai dengan nama kelompoknya