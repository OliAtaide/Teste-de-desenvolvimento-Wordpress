FROM mariadb:10.6.4-focal
  
COPY data.sql /docker-entrypoint-initdb.d/


