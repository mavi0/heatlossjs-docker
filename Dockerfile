FROM ubuntu
RUN apt-get update && apt-get install -y git
WORKDIR /heatlossjs
RUN cd /heatlossjs && git clone https://github.com/TrystanLea/heatlossjs.git
COPY . /heatlossjs/heatlossjs

# FROM nginx
# COPY --from=0 /heatlossjs/heatlossjs /usr/share/nginx/html

FROM php:8.2-cli
COPY . /usr/src/app
WORKDIR /usr/src/app
CMD [ "php", "./index.php" ]