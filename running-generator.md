### Running Generator
```sh
# Get the latest URL of the openapi spec and download it to ./shaype-webhook-openapi-spec.json
curl https://developer.shaype.com/openapi/62560a1548e9da0041f9e009 > ./openapi.json

openapi-generator generate -i ./openapi.json  -g php-nextgen -c ./config.yml
```
