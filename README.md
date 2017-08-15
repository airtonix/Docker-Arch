# Docker Arch(itect)

[![Latest Stable Version](https://img.shields.io/packagist/v/ph3nol/docker-arch.svg)](https://packagist.org/packages/ph3nol/docker-arch)
[![License](https://img.shields.io/packagist/l/ph3nol/docker-arch.svg)](https://packagist.org/packages/ph3nol/docker-arch)
[![Total Downloads](https://img.shields.io/packagist/dt/ph3nol/docker-arch.svg)](https://packagist.org/packages/ph3nol/docker-arch)
[![Build Status](https://secure.travis-ci.org/Ph3nol/Docker-Arch.png)](http://travis-ci.org/Ph3nol/Docker-Arch)

[![SensioLabsInsight](https://insight.sensiolabs.com/projects/4f6f80c4-281a-4903-bf4c-1eb264995dbd/big.png)](https://insight.sensiolabs.com/projects/4f6f80c4-281a-4903-bf4c-1eb264995dbd)

## Local installation

```
curl -O -sL https://github.com/Ph3nol/Docker-Arch/raw/master/dist/docker-arch.phar
chmod +x docker-arch.phar
mv docker-arch.phar /usr/local/bin/docker-arch
```

Note: for information, there is no stable release for instant, work is in progress.

## Docker installation

From dedicated [Docker image](https://hub.docker.com/r/ph3nol/docker-arch/).

```
docker pull ph3nol/docker-arch
docker run -it -v $(pwd):/destination ph3nol/docker-arch build /destination
```

Build from local library Dockerfile:

```
docker build --force-rm --no-cache -t ph3nol/docker-arch ./docker/phar/
```

## Docker Arch JSON file configuration

[See some projects configurations examples](examples/).

## Development

```
docker build --force-rm --no-cache -t ph3nol/docker-arch-local ./docker/local/
docker run -it -v /path/to/the/docker-arch/library:/app -v $(pwd):/destination ph3nol/docker-arch-local php
docker run -it -v /path/to/the/docker-arch/library:/app -v $(pwd):/destination ph3nol/docker-arch-local composer
docker run -it -v /path/to/the/docker-arch/library:/app -v $(pwd):/destination ph3nol/docker-arch-local bin/docker-arch build /destination
docker run -it -v /path/to/the/docker-arch/library:/app -v $(pwd):/destination ph3nol/docker-arch-local composer build-phar
```

## To do

* Improve README and documentation
* Implement a UI to generate JSON configuration, with all possible options
* Add `.docker-arch.json` generation (from `docker-arch init`)
* Publish official Docker ph3nol/docker-arch image
* Add some services (ElasticSearch, RabbitMQ, MongoDB, etc.)
* Write fucking unit Tests (Atoum powered)
