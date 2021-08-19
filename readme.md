# Mineral-finder Project

Author: chopas11

Version: 2.2.1

Date: 19.08.2021

## Description

**Usage:**

Build all containers:

    $ docker-compose build

Create network:

    $ docker network create my-network

Create containers:

    $ docker create -it -p 80:80 --volume "$(pwd)/server/:/var/www/html/" --net=my-network --name=server mineral-finder_server && \
    docker create -it -p 3306:3306 --net=my-network --name=db mineral-finder_db

Start containers:

    $ docker start server && \
    docker start db

**Database Init:**

    $ CREATE DATABASE mineral;
    CREATE USER 'chopas'@'%' IDENTIFIED BY 'password';
    GRANT ALL PRIVILEGES ON *.* TO 'chopas'@'%' IDENTIFIED BY 'password' WITH GRANT OPTION;
    flush privileges;
    exit
