#!/bin/bash

# Generate the PHP client
# keeping the same version of the openapi generator to avoid generator diffs

# for some reason the generated src/Configuration.php file contained an issue in the last function I had
# to manually fix where it declared $hostSettings as a parameter name but used $hostsSettings in the method bodyù

docker run --rm -v ${PWD}:/local openapitools/openapi-generator-cli:v7.2.0 generate \
  -i /local/openapi/2025-09-10.yaml \
  -g php \
  -o /local/generated \
  -c /local/build/open-api-config.json \
  --additional-properties invokerPackage=Dojo_PHP \

# remove older files in models and api
rm -rf src/Model/*
rm -rf src/Api/*
# Copy files from generated to src - only everything inside generated/src
cp -rv generated/src/. src/
rm -rf generated