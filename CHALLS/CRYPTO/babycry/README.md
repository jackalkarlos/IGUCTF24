# babycry [300 pts]

**Category:** CRYPTO

**Solves:** 2

## Description

[![BABYCRY](http://img.youtube.com/vi/KbHn8_2lh90/0.jpg)](http://www.youtube.com/watch?v=KbHn8_2lh90 "BABYCRY")

quantum is too risky

<p style="color: red;">FUZZİNG YASAK!</p>

>*flag format: iguctf{placeholder}*

>**Author: karlos**

**Hint**
* sertifikamı kırdılar dediğinde ssllerin elinden gittim aldım seni

## Solution

Web soruları arasında, SSL sertifikası imzalanmış olmayan ve siteye bağlanırken uyarı alınan tek soru buydu. Soru uzun süre kimse tarafından çözülemediğinden, "sertifikamı kırdılar dediğinde ssllerin elinden gittim aldım seni" yazan bir ipucu yayınlanmıştı. Bu ipucundan yola çıkarak sitenin sertifikasının "kırılması" gerektiğini anlayabiliyorduk. Sitenin kaynak kodlarında da anlamsız bir sayı değeri bulunuyordu.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/74ef2cb7-0c06-4f62-8c30-e483e05a1caf)

SSL Sertifikasını kırabilmek ya da inceleyebilmek için önce indirmemiz gerekiyordu, Edge üzerinde aşağıdaki gibi sertifika indirilebilirdi.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/4f16c4d2-c55d-4226-8589-c2ddcc2db030)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/4182af93-56a3-405f-8cfe-c1097d8b3df4)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/1fd5cedc-0cd6-49b0-b8f0-1c20f289279b)

Sonrasında, ".crt" formatındaki sertifikayı, ".pem" formatındaki public key'e dönüştürmemiz gerekiyordu.

```bash
openssl x509 -in mycert.crt -out mycert.pem -outform PEM
```
![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/8d468166-2cb7-4bd2-96e3-e40292c5167b)

Dönüştürdüğümüz public key'i ve site üzerindeki şifrelenmiş sayıyı kullanarak bayrağı elde edebiliyorduk.


```bash
python RsaCtfTool.py --publickey /mnt/c/Users/mdmrr/Desktop/mycert.pem --decrypt 228969705292702677617111795679005460125090989356732860659324598146001102226952162925970145931270607084808063334291975569830145317703856073093958266081239859896655074548631775027591771483853150709732595473710961634790407154023976701567815355244741953025508016610941361587290622363062060730023536358387826988945945082826133832440492338393587013267748300056158420086654084874315721436650138101560556334510704250125340323389815500686341521454441832857169306027925895223548289499343868799190796483858125915427016070689963365468616333476389358250889841306221422594185746327829422241273025650233850637848054800894768630424365756966308906412221211722473554976399071817625966518973658565951540393657568961994610514078187411934188806977353621319659656183497008207711073715968027502615402551218317320480348163354877628550839964701169378674832802932424313466969396513011635911227930302224961549176648446555394069465590607022011382584791774020634858404698481734494027970037901276795929893658182607880425468106462745559808663521619723894100210379639060126474226011026459872138530088531972857517599376664850447192598717397048062500376775781855429845071975446227118143254252665651363561342469864255788795970217132073429153324611069321990868564944743
```

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/110fb9ab-54b7-4a06-be49-e6d1dd10d0e7)

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/9bca667c-8fdb-4fe8-beed-df74f94314c4)



### Flag
iguctf{ah_ellerim_kirilaydi_o_modulusu_ben_unutaydim}
