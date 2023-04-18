#!/bin/bash

docker run -v ${PWD}:/local openapitools/openapi-generator-cli generate \
  -i https://docs.dojo.tech/bundled.json \
  -g php \
  -o /local \
  -c /local/build/open-api-config.json \
  --global-property models,apis \
  --additional-properties invokerPackage=Dojo_PHP

