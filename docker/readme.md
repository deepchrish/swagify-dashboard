# Project Environment Requirement
Server :  Nginx {stable/1.16.1}

Php : php7.4-fpm

Php Extensions :
    php7.4-json
    php7.4-bcmath
    php7.4-cli
    php7.4-bz2
    php7.4-curl
    php7.4-mbstring
    php7.4-intl
    php7.4-imap
    php7.4-mysql
    php7.4-gd
    php7.4-opcache
    php7.4-xml
    php7.4-zip
    php7.4-common


Node : 12.x {LTS/12.14.0}

# Setup Local Environement on Ubuntu18.04
Step 1: Upgrade System 
        RUN > sudo apt get update 
        RUN > sudo apt get upgrade 

Step 2: Install Docker
        //Install docker demon
        RUN > sudo apt install docker.io
        //Check docker installed
        docker --version

Step 3: Install Portainer if required Docker UI 
        // Create volume
        RUN > docker volume create portainer_data

        //Create portainer container
        RUN> docker run -d -p 9000:9000 --name portainer --restart always -v /var/run/docker.sock:/var/run/docker.sock -v portainer_data:/data portainer/portainer

        //Login to Portainer UI 
        Open your web browser and type the server IP address with port 9000 like: localhost:9000
        
        //Set password 
         User: admin
         Password: admin123

        //Set Environment
        Choose the 'Local' environment and click 'Connect' button.

        Thats it. 

Step4: Install Redis 
        RUN > docker run -d -p 3276:6379 --name=redis --restart always redis:latest

Step5: Install MariaDB
        RUN > docker run -d -p 3306:3306 --name=mariadb --restart always -e MYSQL_ROOT_PASSWORD=root mariadb:10.4.8

Step6: Create Project Container
       //Clone Project Repo 
       RUN > sudo git clone {repository_url}
       RUN > cd {project_folder}
       //Create docker image
       RUN > sudo docker build -t brandnex:build --force-rm --no-cache -f docker/dockerFile.dev .
       //Create docker container
       sudo docker run -d --name=brandnex --env NODE_ENV=development -p 8088:80 -v $PWD:/opt/brandnex --link redis:redis --link mariadb:mariadb brandnex:build

       sudo docker run --name sqladmin -d --link mariadb:db -p 8081:80 phpmyadmin/phpmyadmin

Step7: Run Project
    //Set env file
    create .env file if not exists. Add database or other configurations

    //Install dependencies
    Go to Portainer, open console of project "Brandnex" container and run below commands:
    
    //Install laravel packages using composer
    RUN > composer install
    
    //Install node modules
    RUN > npm install

    //Generate project assets
   RUN > npm run dev

//Useful commands 
docker run --name redisui -ti -p 5001:5001 --link redis:myredis marian/rebrow


That's it.



      

    