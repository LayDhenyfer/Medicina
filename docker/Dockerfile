ARG IMAGE_VERSION=3.8.0
FROM okngroup/nginx-sites-web-server:${IMAGE_VERSION}



#RUN curl -sL https://deb.nodesource.com/setup_current.x | bash -
#RUN  apt-get install -y nodejs

COPY entrypoint.sh /entrypoint.sh
RUN chmod +x /entrypoint.sh

ENTRYPOINT ["/entrypoint.sh"]