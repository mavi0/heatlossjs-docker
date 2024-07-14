FROM ubuntu
RUN apt-get update && apt-get install -y git
WORKDIR /heatlossjs
RUN cd /heatlossjs && git clone https://github.com/TrystanLea/heatlossjs.git
COPY . /heatlossjs/heatlossjs

# FROM nginx
# COPY --from=0 /heatlossjs/heatlossjs /usr/share/nginx/html

FROM php:8.2-apache
COPY --from=0 /heatlossjs/heatlossjs /var/www/html/
COPY . /var/www/html/

# WORKDIR /var/www/html/
# CMD [ "php", "./index.php" ]