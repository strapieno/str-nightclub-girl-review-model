COMPOSER_DEV = 

# start download container
preComposer:
	docker pull composer/composer

# star composer
composer:preComposer
	docker run --rm -v $(PWD):/app composer/composer update --ignore-platform-reqs --prefer-dist -o $(COMPOSER_DEV)
