FROM wyveo/nginx-php-fpm:latest
WORKDIR /usr/share/nginx
RUN rm -rf /usr/share/nginx/html
COPY . .
RUN chmod -R 777 /usr/share/nginx/storage
RUN ln -s public html
# RUN apt-get update && apt-get install vim -y
# RUN apt-get install nodejs npm -y
