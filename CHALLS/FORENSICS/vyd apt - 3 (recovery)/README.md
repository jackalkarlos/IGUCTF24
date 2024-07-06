# vyd apt - 3 (recovery) [500 pts]

**Category:** FORENSICS

**Solves:** 0

## Description
Ah Yalan Dünya Corp. adlı şirket, sıradan günlerinden birinde beklenmedik bir durumla karşı karşıya kaldı. Her şey normal seyrinde ilerlerken, bir anda sistemlerin tamamı Burhan Altıntop adında birinin IK departmanına gönderdiği gizemli bir iş başvuru mailiyle kilitlendi ve şifrelendi. IK çalışanları, durumun tamamen kontrolleri dışında geliştiğini ve neler olduğunu anlayamadıklarını ilettiler. Teknik destek ekibimiz, inceleme yapabilmeniz için sistemden imaj aldılar.  Onlara analizlerinde destek olabilir misin? 

**NOT: TÜM VYD APT SORULARI BİRBİRİYLE BAĞLANTILIDIR VE AYNI İMAJ ÜZERİNDEN ÇÖZÜLECEKTİR.** 

Görünen o ki, saldırgan dosyaları şifrelerken arkasında bir iz bırakmış. Saldırganın hangi şifre ile tam yetkiye eriştiğini ve hangi anahtar ile dosyaları şifrelediğini bulunuz.

>*flag format: iguctf{adminşifresi_ransompass}*

>Link: https://ogrgelisimedutr-my.sharepoint.com/:u:/g/personal/mehmet_demir2_ogr_gelisim_edu_tr/EXlHNKAi57NDpdzcdZx5YaIBsIpXnJ3bmRDETNtD5faPSA?e=DZGh9y

>Alternatif Link: https://drive.google.com/file/d/1h3zug-izZqJgZEBvHWxFz2vBDosNQFsV/view?usp=drive_link

>Alternatif Link: https://drive.google.com/file/d/1BJFtWUXS9sARx2PQ4KEW4SHRQuuNoyVk/view?usp=drive_link

>**Author: karlos**

**Hint**
* reverse reverse ɹǝʌǝɹsǝ
* hacker yetki yükseltmek ve dosyaları şifrelemek için bazı exeleri kullandı. şifreleri ayıklamamıza yardım eder misin?

## Solution
NOT: Tüm VYD APT serisi birbiri ile bağlantılı ve bir senaryoya bağlı olduğu için her bir sorudaki çözüm metni, serideki diğer soruların da çözümüne bağlıdır. Eğer ikinci, üçüncü veya dördüncü sorunun çözümünden başladıysanız birinci sorunun çözümünden başlayarak okumaya başlamanız tavsiye edilir.

Eğer soruyu senaryoya göre çözdüyseniz, ikinci soruda MFT kayıtlarını incelerken saldırgan tarafından oluşturulan zararlı olabilecek dosyalara rastlamıştık. 3 adet exe dosyamız var.

C:\Users\ik\AppData\Local\Temp\temp.exe

C:\Users\ik\AppData\Local\Temp\priv.exe

C:\Users\ik\AppData\Local\Temp\adm2.exe

Üç dosyaya da SANAL MAKİNEMİZDE önce DIE uygulamasını kullanarak sonra VirusTotal ile birlikte ön analiz yapıyoruz.  

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/5da8828e-3d35-47a9-8f29-a49a54eb0241)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/3e85331f-08b8-4f5a-8c63-660acb7be5ff)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/fc3c988f-4ae9-45ed-a830-f4fb0f878a4d)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/96d547fd-a3b5-44a7-8a57-9f63a95a6a03)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/9df86f43-14a6-4bef-a2f1-b3fa22f48233)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/7dbafc21-6ab2-479d-9ece-114795269121)

İlk iki dosya, Havooc tarafından oluşturulan backdoor dosyaları. "adm2.exe" adlı dosyayı, DnSpy yardımıyla inceliyoruz. Exe'nin resources verileri arasında exe'nin çalıştırdığı powershell komutuna rastlıyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/d50a5ce2-5600-4e23-9660-a4804735dd23)

Komutu CyberChef yardımıyla decode ediyoruz. Bu aşamada nasıl decode edeceğimizi anlamak için kodları incelemek ya da sadece CyberChef'in büyülü sopasının yardım etmesine izin vermek yeterli oluyor.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/4c7554b4-bb91-4a94-ac57-80f9f90d8283)

![carbon (1)](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/05a31bc4-c264-4927-8f05-765b8ac42472)

İlgili zararlı kod, ChatGPT'nin bile çözebileceği kadar kolay şekilde obfuscate edilmişti. Elimizle ya da yapay zeka yardımıyla çözebiliriz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/936ee367-9fee-438c-a3ea-debe79d85369)

```powershell
$username = "Administrator"
$password = ConvertTo-SecureString -String "!ghost1face2killah74" -AsPlainText -Force
$credential = New-Object -TypeName System.Management.Automation.PSCredential -ArgumentList $username, $password
Start-Process -Credential $credential -FilePath "C:\Users\ik\AppData\Local\Temp\priv.exe"
Start-Process -Credential $credential -FilePath "C:\Users\ik\AppData\Local\Temp\enc.exe" -Args "-pass da0351e31ecd555e8d8baecd87dd7ebb"
```

Saldırgan yönetici hesabına "!ghost1face2killah74" şifresi ile giriş yapıyor ve şuan imajın içerisinde bulunmayan "enc.exe" dosyasını "-pass da0351e31ecd555e8d8baecd87dd7ebb" argümanı ile çalıştırıyor.

Bu durumda ilk cevabımız <b>!ghost1face2killah74</b>, ikinci cevabımız <b>da0351e31ecd555e8d8baecd87dd7ebb</b> oluyor.


### Flag
iguctf{!ghost1face2killah74_da0351e31ecd555e8d8baecd87dd7ebb}
