# so slowly television [480 pts]

**Category:** MISC

**Solves:** 10

## Description

*flag format: iguctf{placeholder}*

>**Author: TA2ALQ**

## Solution
Soruda kullanılan algoritma türü amatör telsizcilikte de kullanılan Slow-scan Television - SSTV (Yavaş Taramalı Televizyon) haberleşmenin P7 isimli formatı.

**Gereken Programlar**: MMSSTV ve Virtual Audio Cable 

Öncelikle bize sanal ses kablosu gerekiyor bunun için Virtual Audio Cable programını kullanabiliriz.

VAC-Lite kurulumu tamamlandıktan sonra asıl decode işini yapacak programımız olan MMSSTV programını kuruyoruz.


https://www.qsl.net/kf6ypq/mmsstv.html

![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/2d89708d-cbbe-457c-a812-849596f82e61)






Yapmamız gereken tek şey ses dosyasını sanal ses kablosundan oynatma. En basit şekilde bütün bilgisayarın seslerini bu kabloya yönlendirebiliriz veya sadece uygulamaların seslerini kabloya yölendirebiliriz. Biz burda daha kolay olması için bütün bilgisayarın seslerini bu kabloya yönlendiriyoruz.

Bunu Windows 11 üzerinde sağ altta ses düzeyini ayarladığmız menüde "Ses Çıkışı Seçin" butonuna basın ve Line 1 ses kartını seçin.


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/545d0c4d-7346-4c05-95e8-06471336b5f2)


Windows'un diğer versiyonlarında ve Windows 11'de denetim paneli ses uygulaması üzerinden sanal ses kartını seçbiliriz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/a14a5304-279f-4f29-9dfa-9e1893e1289d)


**Not: Kayıt ve Kayıttan Yürütme Aygıtlatı Sanal Ses Kablosuna Çekilmeli.**

En sonunda artık ses dosyamızı oynatabiliriz. Ses dosyasını oynattığımızda bayrağımız MMSSTV üzerinde çıkmaya başlıyor

![Screenshot 2024-07-10 222324](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/953a61a2-4689-4ff4-adf7-3a28ed0533ea)

Çıkan QR Kodu Okuttuğumuzda Mesajımız Karşımıza Çıkıyor.


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/c8d0c043-cb54-4f9a-9d3d-b98231c5768c)


**Çıkan Mesaj:** Hoşgeldiniz. Yayınımızı İzlediğiniz İçin Teşekkür Ederiz. Başarılar Dileriz. iguctf{YaV4s_Y4y1Nim1Zi_1zL3D1GiN1z_1c1N_T3sEkKurL3R}



### Flag
iguctf{YaV4s_Y4y1Nim1Zi_1zL3D1GiN1z_1c1N_T3sEkKurL3R}
