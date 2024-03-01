FROM richarvey/nginx-php-fpm:3.1.6

# Copy all application code into your Docker container
COPY . .

RUN apk update

# Install the `npm` package
RUN apk add --no-cache npm

# Install NPM dependencies
RUN npm install

# Build Vite assets
RUN npm run build

# Install required packages
RUN apk add --no-cache autoconf g++ make libmemcached-dev

# Install the `memcached` PHP extension with SASL auth enabled
RUN pecl install --configureoptions 'enable-memcached-sasl="yes"' memcached

# Enable the `memcached` PHP extension
RUN docker-php-ext-enable memcached

CMD ["/start.sh"]