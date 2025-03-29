FROM faww/waf-php-base:b0a7bcffc496d8cf777b2a81fd6e203950e96adb

COPY src/ /app
COPY settings.php /app
