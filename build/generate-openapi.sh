#!/bin/bash

docker run --rm -v ${PWD}:../src/generated openapitools/openapi-generator-cli generate \
  -i https://docs.dojo.tech/bundled.json \
  -g php -o ../src/generated

