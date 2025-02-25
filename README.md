# Docker-IT

## Introdution

This project groups many services which are useful for labolatory/team IT management. It includes the following services:

1. Gitlab
2. Mattermost
3. Docmost
4. n8n
5. nocodb
6. LDAP Services
    - OpenLDAP
    - phpLDAPadmin
    - self-service-password
7. docker-mailserver
8. Traefik
9. Watchtower

All of the services are deployed by using Docker Compose.

## Usage

1. Please firstly edit the `ROOT_DOMAIN` in the `env.shared`.
2. Because of the docker network dependency, you should **start each compose project in the following order**:
    1. Traefik
    2. LDAP Services
    3. other services
