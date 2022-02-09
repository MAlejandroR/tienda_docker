FROM php:8.1-rc-fpm-buster

ENV DEBIAN_FRONTEND noninteractive


#apache2 y php 8
RUN  apt-get update
RUN  apt-get -y install apt-utils

RUN apt-get install -y net-tools
RUN apt-get install -y vim
RUN apt-get install -y less
RUN apt-get install -y bash

RUN echo "alias e='tail -f /var/log/apache2/error.log' >> /root/.bashrc"


RUN apt-get clean


