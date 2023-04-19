#!/bin/bash

# Generate the PHP client
docker run -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i https://docs.dojo.tech/bundled.json \
  -g php \
  -o /local/generated \
  -c /local/build/open-api-config.json \
  --global-property models,apis \
  --additional-properties invokerPackage=Dojo_PHP

# Copy files from generated to src - only everything inside generated/src

