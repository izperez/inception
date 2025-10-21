
FROM debian:bookworm

RUN apt update && apt upgrade -y && apt install -y php8.2-fpm php8.2-mysqli curl

COPY www.conf /etc/php/8.2/fpm/pool.d/.
COPY script.sh .
RUN chmod +x script.sh

#CMD ["php-fpm8.4", "-F"]
CMD ["./script.sh"]
