# vyd apt - 2 (wat da hacker doin) [700 pts]

**Category:** FORENSICS

**Solves:** 1

## Description

Ah Yalan Dünya Corp. adlı şirket, sıradan günlerinden birinde beklenmedik bir durumla karşı karşıya kaldı. Her şey normal seyrinde ilerlerken, bir anda sistemlerin tamamı Burhan Altıntop adında birinin IK departmanına gönderdiği gizemli bir iş başvuru mailiyle kilitlendi ve şifrelendi. IK çalışanları, durumun tamamen kontrolleri dışında geliştiğini ve neler olduğunu anlayamadıklarını ilettiler. Teknik destek ekibimiz, inceleme yapabilmeniz için sistemden imaj aldılar.  Onlara analizlerinde destek olabilir misin? 

**NOT: TÜM VYD APT SORULARI BİRBİRİYLE BAĞLANTILIDIR VE AYNI İMAJ ÜZERİNDEN ÇÖZÜLECEKTİR.** 

**you already know what you have to do.**

>*flag format: iguctf{placeholder}*

>Link: https://ogrgelisimedutr-my.sharepoint.com/:u:/g/personal/mehmet_demir2_ogr_gelisim_edu_tr/EXlHNKAi57NDpdzcdZx5YaIBsIpXnJ3bmRDETNtD5faPSA?e=DZGh9y

>Alternatif Link: https://drive.google.com/file/d/1h3zug-izZqJgZEBvHWxFz2vBDosNQFsV/view?usp=drive_link

>Alternatif Link: https://drive.google.com/file/d/1BJFtWUXS9sARx2PQ4KEW4SHRQuuNoyVk/view?usp=drive_link

>**Author: karlos**

**Hint**
* MFT
* zaman zaman oluşan her şeyin not edildiği bir yer var. adına mft diyorlar. önce ben gelmişim, sonra "arka"mdan başkası gelmiş. çok masum görünebilirmişim, ama masum değilmişim. incelemeniz lazımmış. kafa karıştırabilirmişim. hackerlar çok acımasızmış.
* olay zamanı ne zaman olmuştu ki ben tam o dakikalarda oluşayım
* hacker son derece legal gibi gözüken bir dosya oluşturdu. o dosyayı bulup içeriğini decode eder misin?
* .txt

## Solution
NOT: Tüm VYD APT serisi birbiri ile bağlantılı ve bir senaryoya bağlı olduğu için her bir sorudaki çözüm metni, serideki diğer soruların da çözümüne bağlıdır. Eğer ikinci, üçüncü veya dördüncü sorunun çözümünden başladıysanız birinci sorunun çözümünden başlayarak okumaya başlamanız tavsiye edilir.

Bu soru çok fazla ipucu gelmeden çözülemedi. Saldırganın bağlantı sonrasında oluşturduğu dosyaların incelenmesi gerekiyordu. İpuçlarına göre MFT kayıtları içerisinde olayın gerçekleştiği zamana yakın olan kayıtların incelenmesi gerekiyordu. 

C:/ dizini altındaki $MFT dosyasını kendi dizinimize çekiyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/7f6d8930-a30d-4294-ab53-c86860505aef)

Bu dosyayı ayrıştırmak için Eric Zimmerman'ın MFTECmd aracını kullanacağız. (https://ericzimmerman.github.io/#!index.md)

İlgili MFT dosyasını araç ile aynı konuma alıyoruz.

```cmd
MFTECmd.exe -f $MFT --csv MFTout --csvf out.csv
```
![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/aae408a4-5feb-4f6f-a744-6abf8d811f3b)

İlgili dosyayı incelemeye başlamadan önce, olayın gerçekleşmeye başladığı zaman aralığı bilgisine ihtiyacımız var. Bunu zararlı gördüğümüz herhangi bir dosyanın oluşturulma tarihine, ya da dosyanın indirilmeye başlanma tarihine göre inceleyebiliriz. Eğer soruyu senaryoya göre çözdüyseniz, ilk soruda elimizde olayın başladığı zamanın timestamp bilgisi (13356309041143015) vardı. Bu timestamp'ı tarih bilgisine bu siteden çevirebilirdik. (https://www.epochconverter.com/webkit)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/683c3f8d-6a04-4a28-894f-6d48dd5b1f49)

Dosyayı incelemek için; oluşturulan csv dosyasını Excel ile açıp tüm satırları seçip Veri sekmesindeki "Metni Sütunlara Dönüştür" seçeneği ile hepsini formatlı hale getirip verileri inceleyebileceğimiz şekile getirebilirdik. Bu bize görmek istediğimiz zamanda gerçekleşen olayları filtrelememiz için fırsat sağlar. Ek bir seçenek olarak, TimelineExplorer kullanabiliriz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/5d3f51cb-7893-4614-a370-917131269890)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/7e39149c-3972-4021-bc90-92c9d3c60cde)

Crated0x30 değerine göre dosyaları sıralayıp olayın gerçekleşme sırasına göre zararlı veya sistem içerisinde sonradan oluşturulan dosyaları ayıklıyoruz. 0x30'u seçme sebebimiz 0x30 kayıtlarındaki değişikliklerin sadece kernel düzeyinde yapılabilmesi.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/1baa56c2-8dbe-40ee-a7a0-077dd92ceac6)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/4ad6dfd5-1bb8-4f22-a098-2ffaceb2c49c)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/f3b6c636-5e8f-4c21-970f-3a9bd385086c)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/497d0653-c381-4e0a-8a8c-51fccea7d9d0)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/402235ac-19be-47a3-b816-05a325997ab7)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/8ba6db7e-01ef-4a73-8faf-9e427d43c126)

Son derece legal gibi gözüken "appinfoext.txt" dosyası sonradan birisi tarafından oluşturulmuş. Bunun gerçekleşmesi için ya birisinin bu dosyayı oluşturması gerekiyor, ya da yeni bir yazılım kurulmuş olması gerekiyor. Saldırı başladıktan sonra gerçekleşen her şey bizim için şüpheli. İlgili dosyayı dizinimize aktarıp inceliyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/d0c32ea6-fe73-45d8-8ef7-7eae9cdde0b1)

İlgili veriyi Cyberchef'de decode ediyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/d1a4922e-2aca-4ab8-be75-1c8a75624391)




### Flag
iguctf{oh_shhh!_1m_in!}
