php-install:
	sudo apt-get update
	sudo apt-get install php8.1 php8.1-gd php8.1-intl php8.1-xsl php8.1-pdo php8.1-mbstring

test:
	./vendor/bin/phpunit tests
