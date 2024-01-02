FROM bref/php-82-fpm

RUN yum update && \
  yum --assumeyes install git

RUN curl -s https://getcomposer.org/installer | php && \
  php composer.phar require bref/bref

RUN git clone https://github.com/KirinAS/kirinas.com . && \
  git submodule init && \
  git submodule sync && \
  git submodule update

ENTRYPOINT ["/lambda-entrypoint.sh"]

CMD ["index.php"]
