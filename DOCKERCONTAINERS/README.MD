Soruları build edebilmek için aşağıdaki şablonu kullanabilirsiniz.

```bash
chmod -R 777 *
docker build -t containername .
docker run -d -p 81:80 -it containername 
```
