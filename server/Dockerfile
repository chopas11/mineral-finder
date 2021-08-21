FROM ubuntu
ENV TZ=Europe/Moscow

WORKDIR /var/www/html/
COPY . .

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone
RUN apt-get update && apt-get install apache2 php php-mysql libapache2-mod-php php-mbstring php-zip php-gd nano -y
RUN echo "<Directory /var/www/html>" >> /etc/apache2/apache2.conf
RUN echo "Options Indexes FollowSymLinks" >> /etc/apache2/apache2.conf
RUN echo "AllowOverride All" >> /etc/apache2/apache2.conf
RUN echo "</Directory>" >> /etc/apache2/apache2.conf

EXPOSE 80

CMD [ "bash", "cmd.sh" ]
