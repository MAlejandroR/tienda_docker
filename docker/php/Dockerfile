FROM php:8.1-rc-fpm-buster

ENV DEBIAN_FRONTEND noninteractive


#apache2 y php 8
RUN  apt-get update
RUN  apt-get -y install apt-utils

RUN apt-get install -y net-tools
RUN apt-get install -y vim
RUN apt-get install -y less
RUN apt-get install -y bash
#RUN ppa-purge ppa:mc3man/trusty-media
#RUN apt-get -y install software-properties-common
#RUN add-apt-repository ppa:ondrej/php
#RUN apt-get  update

#RUN  apt-get  install -y php-mysqli
#RUN  apt install php7.3-mysql

#RUN  apt-get  install -y php-dev
#RUN  apt-get  install -y php-mysql
#RUN  apt-get  install -y php-dev
#RUN  apt-get  install -y php-pear
#RUN  pecl install xdebug

RUN  apt-get  install -y apt-utils

RUN apt-get clean


CMD ["php","-a"]