#This is a sample Image
FROM ubuntu
MAINTAINER Aniruddh_Arrow

RUN apt-get update
RUN apt-get install -y nginx
CMD [“echo”,”Image created”]
