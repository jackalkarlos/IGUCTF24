Soruları build edebilmek için aşağıdaki şablonu kullanabilirsiniz.

```bash
chmod -R 777 *
docker build -t containername .
docker run -d -p 81:80 -it containername 
```

containername -> Soru ismi, container bu isimle oluşturulacak, ismi siz seçmelisiniz.
-p 81:80 -> 81. port sizin localinizde açılacak olan porttur. Hangi porttan erişmek istiyorsanız 81 kısmını o port ile değiştirmelisiniz.

