Run Development

docker-compose -f development/docker-compose.dev.yml up -d --build

Run Production

docker-compose -f development/docker-compose.prod.yml --env-file development/.env.prod up -d --build