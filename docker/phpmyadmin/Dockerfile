FROM phpmyadmin/phpmyadmin


ENV DEBIAN_FRONTEND noninteractive

# php
RUN apt-get update
RUN apt-get install -y net-tools
EXPOSE 80


#
#RUN apt-get -y install software-properties-common
#RUN add-apt-repository ppa:ondrej/php
#RUN apt-get  update
#
#RUN  apt-get  install -y php8.1
#RUN  apt-get  install -y libapache2-mod-php8.1
#
#RUN  apt-get  install -y net-tools
#RUN  apt-get  install -y vim
#RUN  apt-get  install -y php8.1-mysql
#RUN  apt-get  install -y php8.1-dev
#
#RUN  apt-get  install -y php-pear
#RUN  apt-get  install -y apt-utils
#
#RUN pecl install xdebug
#RUN echo "zend_extension=/usr/lib/php/20210902/xdebug.so" >> /etc/php/8.1/apache2/php.ini
#
##
### PHPMyAdmin
##RUN echo 'phpmyadmin phpmyadmin/dbconfig-install boolean true' | debconf-set-selections
##RUN echo 'phpmyadmin phpmyadmin/phpmyadmin-password-confirm password root ' | debconf-set-selections
##RUN echo 'phpmyadmin phpmyadmin/mysql/admin-pass password root' | debconf-set-selections
##RUN echo 'phpmyadmin phpmyadmin/mysql/phpmyadmin-pass password root' | debconf-set-selections
##RUN echo 'phpmyadmin phpmyadmin/reconfigure-webserver multiselect apache2' | debconf-set-selections
##RUN /etc/init.d/mysql start; apt-get -y install phpmyadmin --no-install-recommends
#
#RUN apt-get clean
#RUN apt-get install -y bash

#CMD ["tail -f /etc/init.d/mysqld"]
#CMD "/bin/bash"


