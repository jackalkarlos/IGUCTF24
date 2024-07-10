# Anlıyorsun Değil Mi [500 pts]

**Category:** MISC

**Solves:** 1

## Description
Hava ayaz mı ayaz

Ellerim ceplerimde

Bir türkü tutturmuşum

Duyuyorsun, değil mi?

>*flag format: iguctf{placeholder}*

>**Author: TA2ALQ**

**Hint**
* https://www.btk.gov.tr/amator-telsizcilik ile alakası var mı acaba ??
* "Quadarture Phase ..." der geçerim
* Yapbozun Son Parçası "... Shift Keying"

## Solution

Soruda kullanılan modülasyon türü amatör telsizcilikte de kullanılan Quadrature Phase Shift Keying 31 (QPSK31) kullanılmıştır.

**Gereken Programlar**: MultiPSK ve Virtual Audio Cable 

Öncelikle bize sanal ses kablosu gerekiyor bunun için Virtual Audio Cable programını kullanabiliriz.

VAC-Lite kurulumu tamamlandıktan sonra asıl decode işini yapacak programımız olan MultiPSK programını kuruyoruz.
http://f6cte.free.fr/index_anglais.htm

![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/591c7f94-9d67-480c-a899-f6503d9c379a)


Program kurulduktan sonra öncelikle sanal ses kablomuzdan veri almak için "Sound Card (Input)" menüsünden Line 1 yani sanal kablomuzu seçiyoruz.


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/d24312e2-3265-45a1-9275-2d77ca3866e9)


Ses kartımızı seçtikten sonra "RX/TX screen" butonuna basıyoruz


![Screenshot 2024-07-10 213148b](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/46fd75c5-9c16-49d5-a8fc-1cd13baec9dc)


Butona bastığımızda asıl çalışma sayfamız açılıyor


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/bd1f901f-08a4-46ea-9b8a-dcb17ae9a685)



Burda özellikle kullanılan algoritmayı seçmemiz gerekiyor.


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/59901459-284f-4936-bfa1-310590265571)



Yapmamız gereken tek şey ses dosyasını sanal ses kablosundan oynatma. En basit şekilde bütün bilgisayarın seslerini bu kabloya yönlendirebiliriz veya sadece uygulamaların seslerini kabloya yölendirebiliriz. Biz burda daha kolay olması için bütün bilgisayarın seslerini bu kabloya yönlendiriyoruz.

Bunu Windows 11 üzerinde sağ altta ses düzeyini ayarladığmız menüde "Ses Çıkışı Seçin" butonuna basın ve Line 1 ses kartını seçin.


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/545d0c4d-7346-4c05-95e8-06471336b5f2)


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/d5cafbc7-63be-4eb7-873c-7c1eb701cca9)


Windows'un diğer versiyonlarında ve Windows 11'de denetim paneli ses uygulaması üzerinden sanal ses kartını seçbiliriz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/a14a5304-279f-4f29-9dfa-9e1893e1289d)




En sonunda artık ses dosyamızı oynatabiliriz. Ses dosyasını oynattığımızda bayrağımız MultiPSK üzerinde çıkmaya başlıyor


![image](https://github.com/jackalkarlos/IGUCTF24/assets/53407101/1633904c-bf79-4918-898c-772d5e309d38)


**Çıkan Mesaj:** Bu Mesajimi Okuyorsaniz Bayragi Elde Etmeye Bir Adim Daha Yaklastiniz
iguctf{3N_BuYuK_T3ls1Z_B1z1M_T3lS1z}







### Flag
iguctf{3N_BuYuK_T3ls1Z_B1z1M_T3lS1z}
