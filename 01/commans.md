## Build image
Construimos la imagen:
```
docker build -t docker-php . 
```

## Run container
Corrermos un contenedor de la imagen `docker-php`

```
docker run -p 80:80 -d --name container-app docker-php 
```


## Build image from docker-hub 
Bajamos la imagen desde docker--hub

```
docker pull condef5/todo-hunter
```

Corremos el contenedor:

```
docker run -p 80:80 -d --name hunter condef5/todo-hunter
```
