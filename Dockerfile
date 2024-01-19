FROM ubuntu
RUN apt-get update && apt-get install -y git
WORKDIR /heatlossjs
RUN cd /heatlossjs && git clone https://github.com/TrystanLea/heatlossjs.git
COPY . /heatlossjs/heatlossjs

FROM nginx
COPY --from=0 /heatlossjs/heatlossjs /usr/share/nginx/html