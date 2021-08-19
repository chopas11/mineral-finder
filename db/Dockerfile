FROM ubuntu
ENV TZ=Europe/Moscow

WORKDIR /var/lib/mysql/
COPY . .

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update && apt install mariadb-server mariadb-client -y

EXPOSE 3306

CMD [ "bash", "cmd.sh" ]