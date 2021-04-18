FROM php:7.4

RUN mkdir -p /usr/share/man/man1 /usr/share/man/man2
RUN apt-get update
RUN apt-get install -y --no-install-recommends openjdk-11-jre

WORKDIR usr/local/lib
RUN curl -O https://www.antlr.org/download/antlr-4.9-complete.jar
ENV CLASSPATH="/usr/local/lib/antlr-4.9-complete.jar"
RUN echo "alias antlr4='java -Xmx500M -cp '/usr/local/lib/antlr-4.9-complete.jar' org.antlr.v4.Tool'" >> ~/.bashrc

RUN apt-get update
RUN apt-get install --yes zip unzip

COPY --from=composer:latest /usr/bin/composer /usr/local/bin/composer
