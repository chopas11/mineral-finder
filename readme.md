# Mineral-finder in Docker

Author: chopas11

Version: 2.2.1

Date: 21.08.2021

## Description

**Usage:**

Start all containers:

    $ docker-compose up

<!-- Create network:

    $ docker network create my-network

Create containers:

    $ docker create -it -p 80:80 --volume "$(pwd)/server/:/var/www/html/" --net=my-network --name=server mineral-finder_server && \
    docker create -it -p 3306:3306 --net=my-network --name=db mineral-finder_db

Start containers:

    $ docker start server && \
    docker start db
    -->

**Database Init:**

    $ CREATE DATABASE mineral;
    CREATE USER 'chopas'@'%' IDENTIFIED BY 'SashaSasha100';
    GRANT ALL PRIVILEGES ON *.* TO 'chopas'@'%' WITH GRANT OPTION;
    flush privileges;
    exit
