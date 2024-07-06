# vyd apt - 1 (initial access) [494 pts]

**Category:** FORENSICS
**Solves:** 6

## Description

Ah Yalan Dünya Corp. adlı şirket, sıradan günlerinden birinde beklenmedik bir durumla karşı karşıya kaldı. Her şey normal seyrinde ilerlerken, bir anda sistemlerin tamamı Burhan Altıntop adında birinin IK departmanına gönderdiği gizemli bir iş başvuru mailiyle kilitlendi ve şifrelendi. IK çalışanları, durumun tamamen kontrolleri dışında geliştiğini ve neler olduğunu anlayamadıklarını ilettiler. Teknik destek ekibimiz, inceleme yapabilmeniz için sistemden imaj aldılar. Onlara analizlerinde destek olabilir misin?

**NOT: TÜM VYD APT SORULARI BİRBİRİYLE BAĞLANTILIDIR VE AYNI İMAJ ÜZERİNDEN ÇÖZÜLECEKTİR.**

Şüpheli içeriğin indirilmeye başlandığı zamanın timestampini, saldırganın kullandığı güvenlik açığı kodunu, saldırganın dosyaları şifreledikten sonra tanımladığı decryption idyi bulunuz.

>flag format: iguctf{10000000000000000_CVE-2000-0000_AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA}

>Link: https://ogrgelisimedutr-my.sharepoint.com/:u:/g/personal/mehmet_demir2_ogr_gelisim_edu_tr/EXlHNKAi57NDpdzcdZx5YaIBsIpXnJ3bmRDETNtD5faPSA?e=DZGh9y

>Alternatif Link: https://drive.google.com/file/d/1h3zug-izZqJgZEBvHWxFz2vBDosNQFsV/view?usp=drive_link

>Alternatif Link: https://drive.google.com/file/d/1BJFtWUXS9sARx2PQ4KEW4SHRQuuNoyVk/view?usp=drive_link

>Zip Şifresi: RE2zi7tzHzIqWSGd3DOQWRoX1tXeYKqv

>**Author: karlos**

**Hint**
* burhan bey, neden milleti oltalıyorsunuz? bir burhan altıntop kolay yetişmiyor.

## Solution

NOT: Tüm VYD APT serisi birbiri ile bağlantılı ve bir senaryoya bağlı olduğu için her bir sorudaki çözüm metni, serideki diğer soruların da çözümüne bağlıdır. Eğer ikinci, üçüncü veya dördüncü sorunun çözümünden başladıysanız birinci sorunun çözümünden başlayarak okumaya başlamanız tavsiye edilir.

Sorunun metninde belirtildiği üzere soru bir disk imajı içeriyordu. "file" komutu çalıştırılarak sektör bilgileri de görüntülenebilirdi.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/dbe148a1-20f6-4dc9-98f2-3f1bde2d93f4)

Disk imajlarını incelemek için bir sürü araç bulunmakta, biz en çok kullanılanlardan FTK Imager'i kullanacağız. 

Senaryoya göre, gizemli bir mail ile birlikte tüm sistemler kilitlenir. Bizden istenen ilk şey, bu şüpheli içeriğin indirilmeye başlandığı zaman. Öncelikle maili ve şüpheli içeriğin indirildiği ortamı bulmamız gerekiyor. Bu bir mail uygulaması veya bir web tarayıcısı olabilir. Outlook uygulamasının kurulu olup olmadığını kontrol etmek için C:/Users/ik/AppData/Local/Microsoft dizinine gittiğimizde sadece Edge tarayıcısına ait verileri görebiliyoruz. Bu durumda vakit kaybetmemek için ilk olarak Edge verilerini inceliyoruz.

Daha önceden Edge verilerinin nerede tutulduğu hakkında bilgimiz yoksa internetten kolayca öğrenebiliyoruz. (https://www.foxtonforensics.com/browser-history-examiner/microsoft-edge-history-location)

C:\Users\ik\AppData\Local\Microsoft\Edge\User Data\Default dizini altındaki History dosyasını kendi dizinimize çekiyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/1f99ab2c-deaf-4bff-8308-4f9500fa1638)

Bu dosyalar, daha önce paylaştığım kaynakta da belirtildiği üzere SQLite veritabanı dosyalarıdır. DB Browser for SQLite programı ile History dosyasını açıp incelemeye başlayabiliriz.

Veriyi görüntüle sekmesine geldiğimiz an "downloads" tablosunda ilgili dosyanın lokasyonuna ve indirilmeye başlandığı zamanın timestamp'ına erişebiliyoruz. 

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/b1af79d0-2fe9-4fba-b376-aa02f9a1aef2)

Bu durumda ilk cevabımız <b>"13356309041143015"</b> oluyor.

İkinci cevabımızı bulabilmek için zararlı veriyi incelememiz gerekiyor. Tablo içerisinde ilgili verinin "C:\Users\ik\Downloads\CV.rar" yolunda olduğunu görmüştük. SANAL MAKİNE İÇERİSİNDE ilgili dosyayı açmadan incelemek üzere kendi dizinimize çekiyoruz.

Henüz incelemeden VirusTotal'e attığımızda bile CVE bilgisine erişebiliyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/4a09023e-8c08-4290-80bc-b151cb0d468f)

Winrar'a ait güvenlik açıklarını arattığımızda da ilgili güvenlik açığıyla ilgili detaylara erişebiliyorduk. Linkler ve sample dosyalar incelendiğinde birebir aynı yapıda oldukları görülebilirdi.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/0481f674-6723-43e8-80d5-285efa07e031)

Bu durumda ikinci cevabımız <b>"CVE-2023-38831"</b> oluyor.

Üçüncü cevabımızı bulabilmek için herhangi bir klasörde her yere ransomware tarafından bırakılan metni incelemek yetiyordu. İlgili metin içerisinde şöyle bir metin bulunuyordu.

![carbon](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/bc616b8e-e610-4ebd-891f-d0e7e2d1500f)

Bu durumda üçüncü cevabımız <b>"CBA6001BEBCF57F812491DB851EA318F"</b> oluyor.

### Flag
iguctf{13356309041143015_CVE-2023-38831_CBA6001BEBCF57F812491DB851EA318F}
