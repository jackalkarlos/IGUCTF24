docker build -t "helloworld" .
docker run -d -p "0.0.0.0:9999:9999" -h "helloworld" --name="helloworld" helloworld