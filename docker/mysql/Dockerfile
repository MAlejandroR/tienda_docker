#FROM ubuntu:latest
#
#
#ENV DEBIAN_FRONTEND noninteractive
#
## MySQL Server
#RUN echo 'mysql-server mysql-server/root_password password root' | debconf-set-selections
#RUN echo 'mysql-server mysql-server/root_password_again password root' | debconf-set-selections
#RUN apt-get -y install mysql-server --no-install-recommends
#RUN sed -ie "s/^bind-address\s*=\s*127\.0\.0\.1$/bind-address = 0.0.0.0/" /etc/mysql/my.cnf
#RUN apt-get -y install mysql-client --no-install-recommends
#RUN apt-get install -y bash
#
#VOLUME "/var/log/mysql/"
#RUN apt-get clean
#CMD "service mysql start"
FROM mysql:latest
RUN apt-get update
RUN apt-get install mysql-client

ENV DEBIAN_FRONTEND noninteractive

RUN apt-get update
 \


VOLUME "/var/lib/mysql"
RUN apt-get clean
