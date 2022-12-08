#!/bin/sh

echo "Create a vendor folder..."
mkdir ./vendor
composer update
echo "finish!"