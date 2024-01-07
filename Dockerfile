FROM faww/waf:waf-php-base-2024.1.6.9

COPY src/ /app
COPY settings.php /app
