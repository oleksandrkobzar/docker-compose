# docker-compose

This is a docker project to create a container with PHP, MySQL, Apache
```bash
git clone https://github.com/oleksandrkobzar/docker-compose.git
cd docker-compose
docker-compose up -d // Creating and starting containers
docker-compose ps // Show list containers
```

## Docker Compose

Using Docker Compose is  three-step:

* Define your app’s environment with a Dockerfile
* Define the services that make up your app in docker-compose.yml
* Run docker-compose up

**Build or rebuild services**
```bash
docker-compose build
```

**Create and start containers**
```bash
docker-compose up -d
```
*-d - Run containers in the background*


**Stop and remove containers**
```bash
docker-compose down
```

**List containers**
```bash
docker-compose ps
```

**Other commands**
```bash
docker-compose pull // Pull service images
docker-compose start // Start services
docker-compose push // Push service images
docker-compose stop // Stop services
docker-compose rm // Remove stopped containers
```
