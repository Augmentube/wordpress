FROM ubuntu:20.04

MAINTAINER Joe
ENV Environment=prod
ENV app=nginx

RUN apt-get update  && \
    apt-get install -y nginx sudo systemctl  && \
    sudo systemctl enable nginx 

COPY nginx.conf  /etc/nginx/
ADD ./confd/ /etc/nginx/sites-available/


RUN cd /etc/nginx/sites-enabled/    &&   sudo ln -s /etc/nginx/sites-available/wordpress wordpress
EXPOSE 80 443
ENTRYPOINT [ "systemctl", "start", "nginx"]



