# vyd apt - 4 (remedation) [500 pts]

**Category:** FORENSICS

**Solves:** 1

## Description
Ah Yalan Dünya Corp. adlı şirket, sıradan günlerinden birinde beklenmedik bir durumla karşı karşıya kaldı. Her şey normal seyrinde ilerlerken, bir anda sistemlerin tamamı Burhan Altıntop adında birinin IK departmanına gönderdiği gizemli bir iş başvuru mailiyle kilitlendi ve şifrelendi. IK çalışanları, durumun tamamen kontrolleri dışında geliştiğini ve neler olduğunu anlayamadıklarını ilettiler. Teknik destek ekibimiz, inceleme yapabilmeniz için sistemden imaj aldılar.  Onlara analizlerinde destek olabilir misin? 

**NOT: TÜM VYD APT SORULARI BİRBİRİYLE BAĞLANTILIDIR VE AYNI İMAJ ÜZERİNDEN ÇÖZÜLECEKTİR.** 

Görünen o ki, saldırgan içeride kalmak için bir şeyler denemiş. İlgili kalıntının adını, açıklamasını ve çalıştırdığı konumu bulunuz.

>*flag format: iguctf{name_description_path}*
>*example: iguctf{Windows Print_Windows Print Service_C:\Windows\System32\print.exe}*

>Link: https://ogrgelisimedutr-my.sharepoint.com/:u:/g/personal/mehmet_demir2_ogr_gelisim_edu_tr/EXlHNKAi57NDpdzcdZx5YaIBsIpXnJ3bmRDETNtD5faPSA?e=DZGh9y

>Alternatif Link: https://drive.google.com/file/d/1h3zug-izZqJgZEBvHWxFz2vBDosNQFsV/view?usp=drive_link

>Alternatif Link: https://drive.google.com/file/d/1BJFtWUXS9sARx2PQ4KEW4SHRQuuNoyVk/view?usp=drive_link

>**Author: karlos**

**Hint**
* https://www.slideshare.net/slideshow/windows-services-101/48830438

## Solution

Soruda verilen örnekten ve yayınlanan ipucundan yola çıkarak saldırganın kalıcılık sağlamak adına sistemde oluşturduğu servis bilgilerine ihtiyacımız vardı. Bunu bulmak için C:\Windows\System32\config\SYSTEM dizinindeki kayıt defteri kayıtlarını incelememiz gerekiyordu. Bu dosyayı incelememiz gerektiğini, "windows services forensics" aratması yaparak öğrenebilirdik.

Registry kayıtlarını ayrıştırmaya yarayan bir çok araçtan birisi olan RegRipper aracını kullanacağım. Hive File kısmına SYSTEM dosyamı, Report File kısmına sonuçların kaydedilmesini istediğim lokasyonu giriyorum.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/9da36c53-8e51-48f3-badc-2016ff825358)

Oluşturulan text dosyası içerisinde bize gereken sonuçları ayıklayabilecek birkaç method vardı. Bunlardan birisi senaryoyu takip ederek çözdüyseniz ikinci soruda tespit ettiğimiz zararlı dosyaların isimlerini aratmaktı. Bir diğeri olayın gerçekleştiği saatlere yönelik kayıtları aratmaktı. Bir diğeri ise eğer Windows servislerine aşinaysanız gerçekten diğerlerine benzemeyen servisi bulmaktı.

ControlSet001\Services altında saldırganın oluşturduğu servise rastlayabiliyordunuz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/62302d83-b4ec-4a6b-95d8-0eddf3b6f508)

Bu durumda ilk cevabımız <b>"WaaSMedicScv_Windows"</b>, ikinci cevabımız <b>"Windows Medical Service"</b>, üçüncü cevabımız <b>"C:\Users\ik\AppData\Local\Temp\priv.exe"</b> oluyor.
### Flag
iguctf{WaaSMedicScv_Windows Medical Service_C:\Users\ik\AppData\Local\Temp\priv.exe}
