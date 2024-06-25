
CREATE DATABASE TelefonRehberi;


USE TelefonRehberi;

CREATE TABLE Kisiler (
    ID INT PRIMARY KEY IDENTITY,
    KullaniciAdi VARCHAR(50) UNIQUE NOT NULL,
    TelefonNumarasi VARCHAR(15) NOT NULL,
    Eposta VARCHAR(50) UNIQUE NOT NULL,
    Ad VARCHAR(50) NOT NULL,
    Soyad VARCHAR(50) NOT NULL,
    DogumTarihi DATE,
    Cinsiyet CHAR(1),
    Adres VARCHAR(255),
    Sehir VARCHAR(50),
    PostaKodu VARCHAR(10),
    Ulke VARCHAR(50),
    KayitTarihi DATETIME DEFAULT GETDATE(),
    Aktif BIT DEFAULT 1
);

-- Veri Ekleme (Örnek)
INSERT INTO Kisiler (KullaniciAdi, TelefonNumarasi, Eposta, Ad, Soyad, DogumTarihi, Cinsiyet, Adres, Sehir, PostaKodu, Ulke)
VALUES
 
('Adviye_Yılmaz', '210-692-3121', 'adviye.yilmaz@cyberwar.gov', 'Adviye', 'Yılmaz', '1978-08-15', 'K', 'Gazi Sokak No:12', 'İzmir', '35050', 'Türkiye'),
('Behice_Akkaya', '799-490-9648', 'behice.akkaya@cyberwar.gov', 'Behice', 'Akkaya', '1982-04-25', 'K', 'Fatih Mahallesi No:25', 'Ankara', '06500', 'Türkiye'),
('Belma_Demir', '603-442-1584', 'belma.demir@cyberwar.gov', 'Belma', 'Demir', '1975-12-10', 'K', 'Sümer Sokak No:30', 'İstanbul', '34060', 'Türkiye'),
('Berfin_Can', '293-739-4245', 'berfin.can@cyberwar.gov', 'Berfin', 'Can', '1988-10-05', 'K', 'Zafer Caddesi No:40', 'Ankara', '06120', 'Türkiye'),
('Beste_Çetin', '445-498-5120', 'beste.cetin@cyberwar.gov', 'Beste', 'Çetin', '1983-06-20', 'K', 'Atatürk Bulvarı No:50', 'İzmir', '35070', 'Türkiye'),
('Beyza_Doğan', '919-926-6306', 'beyza.dogan@cyberwar.gov', 'Beyza', 'Doğan', '1990-03-18', 'K', 'Marmara Caddesi No:60', 'İstanbul', '34100', 'Türkiye'),
('Bilge_Erdem', '538-366-8407', 'bilge.erdem@cyberwar.gov', 'Bilge', 'Erdem', '1976-11-23', 'E', 'Güneş Sokak No:70', 'İzmir', '35100', 'Türkiye'),
('Birgül_Güler', '107-742-1065', 'birgul.guler@cyberwar.gov', 'Birgül', 'Güler', '1985-09-30', 'K', 'Ege Mahallesi No:80', 'Ankara', '06070', 'Türkiye'),
('Burcu_Kaya', '983-955-3257', 'burcu.kaya@cyberwar.gov', 'Burcu', 'Kaya', '1979-05-14', 'K', 'Yıldız Sokak No:90', 'İstanbul', '34120', 'Türkiye'),
('Canan_Kılıç', '464-722-7851', 'canan.kilic@cyberwar.gov', 'Canan', 'Kılıç', '1987-02-08', 'K', 'Aslan Caddesi No:100', 'Ankara', '06110', 'Türkiye'),
('Celile_Köksal', '874-761-8641', 'celile.koksal@cyberwar.gov', 'Celile', 'Köksal', '1980-06-01', 'K', 'Kurtuluş Bulvarı No:110', 'İstanbul', '34130', 'Türkiye'),
('Cemile_Öztürk', '632-130-9522', 'cemile.ozturk@cyberwar.gov', 'Cemile', 'Öztürk', '1983-09-05', 'K', 'Çamlık Caddesi No:120', 'İzmir', '35120', 'Türkiye'),
('Cevdet_Şahin', '341-625-9737', 'cevdet.sahin@cyberwar.gov', 'Cevdet', 'Şahin', '1976-12-20', 'E', 'Bahçelievler Mahallesi No:130', 'Ankara', '06080', 'Türkiye'),
('Cihangir_Taner', '189-981-5140', 'cihangir.taner@cyberwar.gov', 'Cihangir', 'Taner', '1991-08-15', 'E', 'Özgürlük Caddesi No:140', 'İstanbul', '34140', 'Türkiye'),
('Cihan_Tekin', '930-593-6815', 'cihan.tekin@cyberwar.gov', 'Cihan', 'Tekin', '1982-04-12', 'E', 'Şehitler Sokak No:150', 'Ankara', '06200', 'Türkiye'),
('Damla_Topçu', '952-679-7240', 'damla.topcu@cyberwar.gov', 'Damla', 'Topçu', '1988-11-25', 'K', 'Çamlıca Mahallesi No:160', 'İstanbul', '34150', 'Türkiye'),
('Dilara_Uysal', '954-394-4023', 'dilara.uysal@cyberwar.gov', 'Dilara', 'Uysal', '1977-10-30', 'K', 'Güzel Sokak No:170', 'İzmir', '35130', 'Türkiye'),
('Dilşad_Yılmaz', '541-424-5948', 'dilsad.yilmaz@cyberwar.gov', 'Dilşad', 'Yılmaz', '1974-03-18', 'K', 'Güneşli Mahallesi No:180', 'İzmir', '35080', 'Türkiye'),
('Ece_Akkaya', '110-129-5161', 'ece.akkaya@cyberwar.gov', 'Ece', 'Akkaya', '1986-07-10', 'K', 'Bahçe Sokak No:190', 'İstanbul', '34160', 'Türkiye'),
('Eda_Demir', '522-567-3532', 'eda.demir@cyberwar.gov', 'Eda', 'Demir', '1979-02-15', 'K', 'Yenimahalle No:200', 'Ankara', '06090', 'Türkiye'),
('Elif_Can', '518-741-4266', 'elif.can@cyberwar.gov', 'Elif', 'Can', '1984-09-20', 'K', 'Çınar Sokak No:210', 'İzmir', '35140', 'Türkiye'),
('Bilge_Kagan', '111-717-0683', 'bilge.kagan@cyberwar.gov', 'Bilge', 'Kağan', '0683-00-00', 'E', 'J. Kom. Er Hakan Öner Sk. No:1', 'İstanbul', '34310', 'Türkiye'),
('Elmas_Çetin', '493-194-8690', 'elmas.cetin@cyberwar.gov', 'Elmas', 'Çetin', '1993-05-05', 'K', 'Gül Sokak No:220', 'İstanbul', '34170', 'Türkiye'),
('Elvan_Doğan', '491-679-5946', 'elvan.dogan@cyberwar.gov', 'Elvan', 'Doğan', '1989-12-10', 'K', 'Karagöz Mahallesi No:230', 'Ankara', '06300', 'Türkiye'),
('Emre_Erdem', '887-132-8052', 'emre.erdem@cyberwar.gov', 'Emre', 'Erdem', '1980-06-18', 'E', 'Gazi Mahallesi No:240', 'İstanbul', '34180', 'Türkiye'),
('Ender_Güler', '731-286-7680', 'ender.guler@cyberwar.gov', 'Ender', 'Güler', '1985-03-25', 'E', 'Adalet Caddesi No:250', 'İzmir', '35090', 'Türkiye'),
('Ercüment_Kaya', '168-631-6062', 'ercument.kaya@cyberwar.gov', 'Ercüment', 'Kaya', '1976-11-30', 'E', 'Söğüt Sokak No:260', 'Ankara', '06400', 'Türkiye'),
('Esma_Kılıç', '199-959-1665', 'esma.kilic@cyberwar.gov', 'Esma', 'Kılıç', '1982-08-05', 'K', 'Orman Sokak No:270', 'İstanbul', '34190', 'Türkiye'),
('Fatma_Koç', '713-122-4921', 'fatma.koc@cyberwar.gov', 'Fatma', 'Koç', '1990-09-20', 'K', 'Ada Sokak No:280', 'Ankara', '06510', 'Türkiye'),
('Feride_Kurt', '704-180-8924', 'feride.kurt@cyberwar.gov', 'Feride', 'Kurt', '1984-06-15', 'K', 'Başaran Sokak No:290', 'İstanbul', '34200', 'Türkiye'),
('Ferit_Kara', '862-118-4807', 'ferit.kara@cyberwar.gov', 'Ferit', 'Kara', '1977-05-10', 'E', 'Çamlıca Caddesi No:300', 'İzmir', '35150', 'Türkiye'),
('Ferhat_Kayıkçı', '534-501-5856', 'ferhat.kayikci@cyberwar.gov', 'Ferhat', 'Kayıkçı', '1988-03-25', 'E', 'Demokrasi Bulvarı No:310', 'Ankara', '06410', 'Türkiye'),
('Gizem_Kızıl', '136-845-4527', 'gizem.kizil@cyberwar.gov', 'Gizem', 'Kızıl', '1992-02-20', 'K', 'Atatürk Caddesi No:320', 'İstanbul', '34210', 'Türkiye'),
('Gülcan_Köse', '610-420-7497', 'gulcan.kose@cyberwar.gov', 'Gülcan', 'Köse', '1987-07-15', 'K', 'Bahçelievler Mahallesi No:330', 'Ankara', '06520', 'Türkiye'),
('Gülşah_Karabulut', '963-379-5197', 'gulsah.karabulut@cyberwar.gov', 'Gülşah', 'Karabulut', '1990-01-18', 'K', 'Güzeltepe Caddesi No:340', 'İstanbul', '34220', 'Türkiye'),
('Güney_Kaya', '455-816-9658', 'guney.kaya@cyberwar.gov', 'Güney', 'Kaya', '1983-04-10', 'E', 'Cumhuriyet Mahallesi No:350', 'İzmir', '35160', 'Türkiye'),
('Güzin_Kara', '296-637-3277', 'guzin.kara@cyberwar.gov', 'Güzin', 'Kara', '1978-09-25', 'K', 'Hürriyet Caddesi No:360', 'Ankara', '06310', 'Türkiye'),
('Hale_Kara', '183-619-1630', 'hale.kara@cyberwar.gov', 'Hale', 'Kara', '1987-06-20', 'K', 'Demokrasi Caddesi No:370', 'İstanbul', '34230', 'Türkiye'),
('Handan_Kaygısız', '372-739-7776', 'handan.kaygisiz@cyberwar.gov', 'Handan', 'Kaygısız', '1979-11-15', 'K', 'Zafer Mahallesi No:380', 'Ankara', '06530', 'Türkiye'),
('Hatice_Kaçar', '403-631-2329', 'hatice.kacar@cyberwar.gov', 'Hatice', 'Kaçar', '1993-08-10', 'K', 'Yunus Emre Sokak No:390', 'İstanbul', '34240', 'Türkiye'),
('Hilal_Kızıl', '351-264-3202', 'hilal.kizil@cyberwar.gov', 'Hilal', 'Kızıl', '1986-05-25', 'K', 'Kurtuluş Mahallesi No:400', 'Ankara', '06320', 'Türkiye'),
('Hülya_Kaygısız', '619-676-1736', 'hulya.kaygisiz@cyberwar.gov', 'Hülya', 'Kaygısız', '1982-12-20', 'K', 'İstiklal Caddesi No:410', 'İzmir', '35170', 'Türkiye'),
('Ilgın_Kılıç', '519-423-4701', 'ilgin.kilic@cyberwar.gov', 'Ilgın', 'Kılıç', '1989-09-15', 'K', 'Şehitler Caddesi No:420', 'İstanbul', '34250', 'Türkiye'),
('İdil_Kara', '423-805-9145', 'idil.kara@cyberwar.gov', 'İdil', 'Kara', '1986-02-10', 'K', 'Mücahit Sokak No:430', 'Ankara', '06540', 'Türkiye'),
('İkbal_Koç', '838-848-6710', 'ikbal.koc@cyberwar.gov', 'İkbal', 'Koç', '1995-11-25', 'K', 'Doğan Sokak No:440', 'İstanbul', '34260', 'Türkiye'),
('İklim_Kaygısız', '355-103-9134', 'iklim.kaygisiz@cyberwar.gov', 'İklim', 'Kaygısız', '1976-08-20', 'K', 'Menderes Caddesi No:450', 'Ankara', '06420', 'Türkiye'),
('İlknur_Koç', '956-550-3611', 'ilknur.koc@cyberwar.gov', 'İlknur', 'Koç', '1981-03-15', 'K', 'Kurtuluş Caddesi No:460', 'İzmir', '35180', 'Türkiye'),
('İnci_Kara', '173-577-8063', 'inci.kara@cyberwar.gov', 'İnci', 'Kara', '1980-06-20', 'K', 'Bağdat Caddesi No:470', 'İstanbul', '34270', 'Türkiye'),
('İpek_Kurt', '362-112-4049', 'ipek.kurt@cyberwar.gov', 'İpek', 'Kurt', '1987-07-25', 'K', 'Şehit Caddesi No:480', 'Ankara', '06550', 'Türkiye'),
('İrem_Karabulut', '371-669-9778', 'irem.karabulut@cyberwar.gov', 'İrem', 'Karabulut', '1982-09-30', 'K', 'Bahçeli Sokak No:490', 'İzmir', '35190', 'Türkiye'),
('Kamuran_Kara', '874-645-4030', 'kamuran.kara@cyberwar.gov', 'Kamuran', 'Kara', '1975-12-15', 'E', 'Karanfil Caddesi No:500', 'İstanbul', '34280', 'Türkiye'),
('Kemal_Koç', '216-546-2694', 'kemal.koc@cyberwar.gov', 'Kemal', 'Koç', '1979-05-10', 'E', 'Demir Sokak No:510', 'Ankara', '06430', 'Türkiye'),
('Kıvanç_Kılıç', '389-777-1491', 'kivanc.kilic@cyberwar.gov', 'Kıvanç', 'Kılıç', '1992-08-20', 'E', 'Demokrat Sokak No:520', 'İstanbul', '34290', 'Türkiye'),
('Kutay_Koç', '873-481-8461', 'kutay.koc@cyberwar.gov', 'Kutay', 'Koç', '1987-01-25', 'E', 'Demokrasi Caddesi No:530', 'Ankara', '06560', 'Türkiye'),
('Lale_Kaya', '986-199-4512', 'lale.kaya@cyberwar.gov', 'Lale', 'Kaya', '1983-02-10', 'K', 'Huzur Sokak No:540', 'İzmir', '35200', 'Türkiye'),
('Melike_Kara', '244-593-9034', 'melike.kara@cyberwar.gov', 'Melike', 'Kara', '1980-12-15', 'K', 'Papatya Caddesi No:550', 'İstanbul', '34300', 'Türkiye'),
('Mehmet_Kaya', '645-511-3156', 'mehmet.kaya@cyberwar.gov', 'Mehmet', 'Kaya', '1985-06-20', 'E', 'Sarıyer Mahallesi No:560', 'Ankara', '06570', 'Türkiye'),
('Merve_Karabulut', '400-493-2235', 'merve.karabulut@cyberwar.gov', 'Merve', 'Karabulut', '1988-03-25', 'K', 'Karadeniz Caddesi No:570', 'İzmir', '35210', 'Türkiye'),
('Meryem_Koç', '455-632-1048', 'meryem.koc@cyberwar.gov', 'Meryem', 'Koç', '1987-05-10', 'K', 'Güneş Sokak No:580', 'İstanbul', '34310', 'Türkiye'),
('Murat_Koç', '639-919-3337', 'murat.koc@cyberwar.gov', 'Murat', 'Koç', '1976-10-15', 'E', 'Aydın Sokak No:590', 'Ankara', '06580', 'Türkiye'),
('Mustafa_Kara', '815-378-1111', 'mustafa.kara@cyberwar.gov', 'Mustafa', 'Kara', '1992-01-30', 'E', 'Ceviz Sokak No:600', 'İzmir', '35220', 'Türkiye'),
('Müge_Kaya', '342-344-9983', 'muge.kaya@cyberwar.gov', 'Müge', 'Kaya', '1989-08-20', 'K', 'Çınar Mahallesi No:610', 'İstanbul', '34320', 'Türkiye'),
('Neslihan_Kara', '924-437-6962', 'neslihan.kara@cyberwar.gov', 'Neslihan', 'Kara', '1984-07-05', 'K', 'Başaran Caddesi No:620', 'Ankara', '06590', 'Türkiye'),
('Nilay_Karabulut', '857-748-5105', 'nilay.karabulut@cyberwar.gov', 'Nilay', 'Karabulut', '1982-02-20', 'K', 'Yalçın Caddesi No:630', 'İzmir', '35230', 'Türkiye'),
('Nur_Koç', '476-976-4805', 'nur.koc@cyberwar.gov', 'Nur', 'Koç', '1987-09-15', 'K', 'Çınar Sokak No:640', 'İstanbul', '34330', 'Türkiye'),
('Oğuzhan_Koç', '888-541-8563', 'oguzhan.koc@cyberwar.gov', 'Oğuzhan', 'Koç', '1985-06-20', 'E', 'Kurtuluş Mahallesi No:650', 'Ankara', '06600', 'Türkiye'),
('Onur_Kaya', '173-690-9947', 'onur.kaya@cyberwar.gov', 'Onur', 'Kaya', '1980-11-25', 'E', 'Demir Caddesi No:660', 'İzmir', '35240', 'Türkiye'),
('Orhan_Kara', '350-237-7729', 'orhan.kara@cyberwar.gov', 'Orhan', 'Kara', '1987-08-10', 'E', 'Küçük Sokak No:670', 'İstanbul', '34340', 'Türkiye'),
('Oya_Karabulut', '668-628-8467', 'oya.karabulut@cyberwar.gov', 'Oya', 'Karabulut', '1991-03-15', 'K', 'Yenimahalle No:680', 'Ankara', '06610', 'Türkiye'),
('Pınar_Koç', '574-219-8012', 'pinar.koc@cyberwar.gov', 'Pınar', 'Koç', '1985-10-30', 'K', 'Gültepe Caddesi No:690', 'İzmir', '35250', 'Türkiye'),
('Rabia_Kara', '650-960-4135', 'rabia.kara@cyberwar.gov', 'Rabia', 'Kara', '1982-05-25', 'K', 'Çetin Caddesi No:700', 'İstanbul', '34350', 'Türkiye'),
('Recep_Kaya', '172-712-2400', 'recep.kaya@cyberwar.gov', 'Recep', 'Kaya', '1989-12-10', 'E', 'Güzel Sokak No:710', 'Ankara', '06620', 'Türkiye'),
('Sadık_Kara', '133-502-1509', 'sadik.kara@cyberwar.gov', 'Sadık', 'Kara', '1974-07-05', 'E', 'Akasya Caddesi No:720', 'İzmir', '35260', 'Türkiye'),
('Safa_Karabulut', '430-902-7568', 'safa.karabulut@cyberwar.gov', 'Safa', 'Karabulut', '1990-02-20', 'E', 'Demokrasi Mahallesi No:730', 'İstanbul', '34360', 'Türkiye'),
('Sami_Koç', '832-155-8639', 'sami.koc@cyberwar.gov', 'Sami', 'Koç', '1985-07-15', 'E', 'Başaran Caddesi No:740', 'Ankara', '06630', 'Türkiye'),
('Seher_Kara', '344-958-8011', 'seher.kara@cyberwar.gov', 'Seher', 'Kara', '1980-02-10', 'K', 'Karanfil Caddesi No:750', 'İzmir', '35270', 'Türkiye'),
('Selçuk_Kaya', '356-567-6726', 'selcuk.kaya@cyberwar.gov', 'Selçuk', 'Kaya', '1987-05-25', 'E', 'Çınar Sokak No:760', 'İstanbul', '34370', 'Türkiye'),
('Selim_Kara', '249-505-8462', 'selim.kara@cyberwar.gov', 'Selim', 'Kara', '1977-10-10', 'E', 'Demokrasi Caddesi No:770', 'Ankara', '06640', 'Türkiye'),
('Selma_Koç', '804-959-8071', 'selma.koc@cyberwar.gov', 'Selma', 'Koç', '1980-01-15', 'K', 'Karagöz Sokak No:780', 'İzmir', '35280', 'Türkiye'),
('Serkan_Kaya', '633-809-5987', 'serkan.kaya@cyberwar.gov', 'Serkan', 'Kaya', '1985-04-20', 'E', 'Kurtuluş Mahallesi No:790', 'İstanbul', '34380', 'Türkiye'),
('Sibel_Kara', '987-789-5767', 'sibel.kara@cyberwar.gov', 'Sibel', 'Kara', '1981-09-15', 'K', 'Demir Caddesi No:800', 'İzmir', '35290', 'Türkiye'),
('Soner_Kara', '479-282-9064', 'soner.kara@cyberwar.gov', 'Soner', 'Kara', '1978-06-10', 'E', 'Çetin Caddesi No:810', 'Ankara', '06650', 'Türkiye'),
('Süleyman_Koç', '848-575-1005', 'suleyman.koc@cyberwar.gov', 'Süleyman', 'Koç', '1983-11-25', 'E', 'Güneş Mahallesi No:820', 'İzmir', '35300', 'Türkiye'),
('Şule_Kara', '161-285-8158', 'sule.kara@cyberwar.gov', 'Şule', 'Kara', '1991-08-20', 'K', 'Kurtuluş Caddesi No:830', 'İstanbul', '34390', 'Türkiye'),
('Şükran_Kara', '784-439-3905', 'sukran.kara@cyberwar.gov', 'Şükran', 'Kara', '1988-05-15', 'K', 'Demokrasi Mahallesi No:840', 'Ankara', '06660', 'Türkiye'),
('Tahir_Koç', '925-132-2365', 'tahir.koc@cyberwar.gov', 'Tahir', 'Koç', '1982-10-30', 'E', 'Cumhuriyet Caddesi No:850', 'İzmir', '35310', 'Türkiye'),
('Talat_Kaya', '982-927-8351', 'talat.kaya@cyberwar.gov', 'Talat', 'Kaya', '1977-02-20', 'E', 'Hürriyet Caddesi No:860', 'İstanbul', '34400', 'Türkiye'),
('Tansel_Kara', '703-573-9755', 'tansel.kara@cyberwar.gov', 'Tansel', 'Kara', '1978-09-15', 'E', 'Demokrasi Caddesi No:870', 'Ankara', '06670', 'Türkiye'),
('Tarık_Kara', '518-275-3396', 'tarik.kara@cyberwar.gov', 'Tarık', 'Kara', '1984-07-30', 'E', 'Kurtuluş Mahallesi No:880', 'İzmir', '35320', 'Türkiye'),
('Taylan_Koç', '149-188-4678', 'taylan.koc@cyberwar.gov', 'Taylan', 'Koç', '1991-04-15', 'E', 'Şehitler Caddesi No:890', 'İstanbul', '34410', 'Türkiye'),
('Tayyar_Kaya', '267-185-3684', 'tayyar.kaya@cyberwar.gov', 'Tayyar', 'Kaya', '1975-11-25', 'E', 'Gazi Caddesi No:900', 'Ankara', '06680', 'Türkiye'),
('Tayyar_Kara', '138-619-4596', 'tayyar.kara@cyberwar.gov', 'Tayyar', 'Kara', '1979-08-10', 'E', 'Kızılay Caddesi No:910', 'İzmir', '35330', 'Türkiye'),
('Tuba_Koç', '152-161-4922', 'tuba.koc@cyberwar.gov', 'Tuba', 'Koç', '1989-03-25', 'K', 'Bahçelievler Mahallesi No:920', 'İstanbul', '34420', 'Türkiye'),
('Tunç_Kara', '332-790-9008', 'tunc.kara@cyberwar.gov', 'Tunç', 'Kara', '1986-10-30', 'E', 'Demokrasi Caddesi No:930', 'Ankara', '06690', 'Türkiye'),
('Turan_Koç', '150-994-9345', 'turan.koc@cyberwar.gov', 'Turan', 'Koç', '1982-05-15', 'E', 'Kuşçu Sokak No:940', 'İstanbul', '34430', 'Türkiye'),
('Türkan_Kaya', '329-598-9689', 'turkan.kaya@cyberwar.gov', 'Türkan', 'Kaya', '1987-08-20', 'K', 'Kemal Paşa Caddesi No:950', 'İzmir', '35340', 'Türkiye'),
('Ufuk_Kara', '647-742-4308', 'ufuk.kara@cyberwar.gov', 'Ufuk', 'Kara', '1989-09-25', 'E', 'Demokrasi Caddesi No:960', 'Ankara', '06700', 'Türkiye'),
('Uğur_Koç', '446-793-4382', 'ugur.koc@cyberwar.gov', 'Uğur', 'Koç', '1980-06-20', 'E', 'Kurtuluş Mahallesi No:970', 'İstanbul', '34440', 'Türkiye'),
('Umut_Kara', '636-579-5725', 'umut.kara@cyberwar.gov', 'Umut', 'Kara', '1987-01-15', 'E', 'Demokrasi Caddesi No:980', 'Ankara', '06710', 'Türkiye'),
('Vahit_Kaya', '359-880-7908', 'vahit.kaya@cyberwar.gov', 'Vahit', 'Kaya', '1982-04-30', 'E', 'Gazi Mahallesi No:990', 'İzmir', '35350', 'Türkiye'),
('Veli_Kara', '685-614-3933', 'veli.kara@cyberwar.gov', 'Veli', 'Kara', '1986-11-25', 'E', 'Kurtuluş Caddesi No:1000', 'İstanbul', '34450', 'Türkiye'),
('Yakup_Koç', '246-720-1785', 'yakup.koc@cyberwar.gov', 'Yakup', 'Koç', '1979-04-10', 'E', 'Başaran Caddesi No:1010', 'Ankara', '06720', 'Türkiye'),
('Yavuz_Kara', '131-458-6219', 'yavuz.kara@cyberwar.gov', 'Yavuz', 'Kara', '1981-05-25', 'E', 'Kıbrıs Şehitleri Caddesi No:1020', 'İzmir', '35360', 'Türkiye'),
('Yelda_Koç', '598-271-5810', 'yelda.koc@cyberwar.gov', 'Yelda', 'Koç', '1978-10-30', 'K', 'Gazi Mahallesi No:1030', 'İstanbul', '34460', 'Türkiye'),
('Yıldız_Kara', '246-596-8292', 'yildiz.kara@cyberwar.gov', 'Yıldız', 'Kara', '1983-09-15', 'K', 'Demokrasi Caddesi No:1040', 'Ankara', '06730', 'Türkiye'),
('Yüksel_Kaya', '259-805-1522', 'yuksel.kaya@cyberwar.gov', 'Yüksel', 'Kaya', '1979-02-20', 'E', 'Gültepe Caddesi No:1050', 'İzmir', '35370', 'Türkiye'),
('Zafer_Kara', '985-302-1507', 'zafer.kara@cyberwar.gov', 'Zafer', 'Kara', '1984-07-05', 'E', 'Küçük Sokak No:1060', 'İstanbul', '34470', 'Türkiye'),
('Zehra_Koç', '887-623-4068', 'zehra.koc@cyberwar.gov', 'Zehra', 'Koç', '1990-12-10', 'K', 'Gazi Mahallesi No:1070', 'Ankara', '06740', 'Türkiye');

-- Rastgele Veri Getirelim
DECLARE @isim VARCHAR(50)
DECLARE @soyisim VARCHAR(50)
DECLARE @sayi INT

SET @isim = 'Ayşe'
SET @soyisim = 'Yılmaz'
SET @sayi = 1

WHILE @sayi <= 100
BEGIN
    INSERT INTO Kisiler (KullaniciAdi, TelefonNumarasi, Eposta, Ad, Soyad, DogumTarihi, Cinsiyet, Adres, Sehir, PostaKodu, Ulke)
    VALUES
        (CONCAT(@isim, '_', @soyisim, @sayi),
         SUBSTRING(CONVERT(VARCHAR(10), RAND() * 1000000000, 0), 1, 10),
         CONCAT(@isim, '.', @soyisim, '@email.com'),
         @isim,
         @soyisim,
         DATEADD(dd, RAND() * 365 * 30, '1970-01-01'),
         CASE WHEN RAND() > 0.5 THEN 'K' ELSE 'E' END,
         CONCAT('Mahalle ', RAND(), ' Sokak No: ', RAND()),
         CASE WHEN RAND() > 0.3 THEN 'Ankara' WHEN RAND() > 0.6 THEN 'İstanbul' ELSE 'İzmir' END,
         SUBSTRING(CONVERT(VARCHAR(5), RAND() * 1000

-- OTP İçin Kullanılacaktır.Şuanlık devre dışı

--DELIMITER //

--CREATE PROCEDURE generate_otp(INOUT otp INT)
--BEGIN
--    SET otp = FLOOR(133500 + RAND() * 500);
--END //

--DELIMITER ;
