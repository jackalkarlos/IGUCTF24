# no more quarantin finally! [498 pts]

**Category:** PWN

**Solves:** 4

## Description
[![HONDA CIVIC 2006](http://img.youtube.com/vi/QIIje6g8M50/0.jpg)](http://www.youtube.com/watch?v=QIIje6g8M50 "BINARY RAP")


>*flag format: iguctf{placeholder}*

>**Author: karlos**

## Solution

```print(globals())``` kodunu kullanarak jail içerisindeki değişkenlere erişiyoruz, sonrasında yasakları kaldırmak için ```blacklist=[]``` kodunu kullanarak blacklist değişkeninin içerisini boşaltıyoruz. "os" kütüphanesini import edip flagi okuyacak komutu çalıştırıyoruz.

![image](https://github.com/jackalkarlos/IGUCTF24/assets/88983987/b632d970-82f4-40f1-bd06-7a6dfc607eea)

### Flag
iguctf{somebody_call_the_cops!!}
