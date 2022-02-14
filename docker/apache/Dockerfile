FROM ubuntu:latest


ENV DEBIAN_FRONTEND noninteractive


#apache2 y php 8
RUN  apt-get update
RUN TZ=Etc/UTC  apt-get -y   install tzdata
RUN  apt-get -y install apache2
RUN  apt-get  install -y net-tools
RUN  apt-get  install -y vim

RUN apt-get -y install software-properties-common
RUN add-apt-repository ppa:ondrej/php
RUN apt-get  update

 RUN  apt-get  install -y php8.1
 RUN  apt-get  install -y libapache2-mod-php8.1
RUN  apt-get  install -y php
RUN  apt-get  install -y libapache2-mod-php

RUN  apt-get  install -y php8.1-mysql
RUN  apt-get  install -y php8.1-dev
RUN  apt-get  install -y php-mysql
RUN  apt-get  install -y php-dev
RUN  apt-get  install -y php-pear
RUN  apt-get  install -y apt-utils
RUN  pecl install xdebug
RUN apt-get update
RUN echo "zend_extension=/usr/lib/php/20210902/xdebug.so" >>/etc/php/8.1/apache2/php.ini
RUN echo xdebug_remote.enable=on >> /etc/php/8.1/apache2/php.ini
# Para ver los errores de apache
VOLUME ['/var/log/apache2/error.log']
RUN echo alias e=\"tail -f /var/log/apache2/error.log\" >> /root/.bashrc




CMD ["apachectl", "-D", "FOREGROUND"]