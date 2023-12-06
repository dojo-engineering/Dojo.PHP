#!/bin/bash

# Generate the PHP client
docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i /local/openapi/2022-04-07.yaml \
  -g php \
  -o /local/generated \
  -c /local/build/open-api-config.json \
  --additional-properties invokerPackage=Dojo_PHP \


# Copy files from generated to src - only everything inside generated/src

