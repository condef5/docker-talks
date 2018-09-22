#!/usr/bin/env bash

# stop and delete container
docker stop container-app
docker rm container-app

# build image  and run container again
docker build -t docker-php .
docker run -p 80:80 -d --name container-app docker-php  
