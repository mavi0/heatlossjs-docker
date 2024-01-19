# HeatLossJS-Docker  ![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/mavi0/heatlossjs-docker/release.yml)

A dockerised version of HeatLossJS by [@TrystanLea](https://github.com/TrystanLea) with [nginx](https://hub.docker.com/_/nginx) for easy self hosting. 

This image is rebuilt nightly when there are commits to the [HeatLossJS repository](https://github.com/TrystanLea/heatlossjs).

Example live site: https://heatlossjs.eleanordavies.uk/

Docker run: 

```bash 
docker run -dit -p 80:80 --restart=unless-stopped ghcr.io/mavi0/heatlossjs:latest
```
Minimal `compose.yml`: 
```yaml
version: "3.3"
services:
    image: ghcr.io/mavi0/heatlossjs:latest
    container_name: heatlossjs
    ports:
      - 80:80/tcp
    networks:
      - default
    restart: unless-stopped
networks:
  default:
    driver: bridge
```