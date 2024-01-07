FROM faww/waf:waf-php-base-2024.1.6.4

COPY src/ /app
COPY settings.php /app
