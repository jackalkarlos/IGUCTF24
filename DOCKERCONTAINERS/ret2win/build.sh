docker build -t "ret2win" .
docker run -d -p "0.0.0.0:9999:9998" -h "ret2win" --name="ret2win" ret2win