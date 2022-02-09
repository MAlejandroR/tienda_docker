FROM ubuntu:latest


ENV DEBIAN_FRONTEND noninteractive


#apache2 y php 8
RUN  apt-get update
RUN TZ=Etc/UTC  apt-get -y   install tzdata
RUN  apt-get -y install apache2

#RUN apt-get -y install software-properties-common
#RUN add-apt-repository ppa:ondrej/php
# RUN apt-get  update

# RUN  apt-get  install -y php8.1
# RUN  apt-get  install -y libapache2-mod-php8.1
RUN  apt-get  install -y php
RUN  apt-get  install -y libapache2-mod-php
RUN  apt-get  install -y net-tools
RUN  apt-get  install -y vim
# RUN  apt-get  install -y php8.1-mysql
# RUN  apt-get  install -y php8.1-dev
RUN  apt-get  install -y php-mysql
RUN  apt-get  install -y php-dev
RUN  apt-get  install -y php-pear
RUN  apt-get  install -y apt-utils


CMD ["apachectl", "-D", "FOREGROUND"]