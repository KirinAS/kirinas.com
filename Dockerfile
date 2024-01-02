FROM bref/php-83-fpm

RUN yum update --assumeyes

RUN curl -s https://getcomposer.org/installer | php && \
  php composer.phar require bref/bref

COPY src/ .
COPY settings.php .

ENTRYPOINT ["/lambda-entrypoint.sh"]

CMD ["index.php"]
