# Mautic

## Local Mautic setup with lando from [laurielim](https://github.com/laurielim)

This a step by step guide on how to setup Mautic's [recommended-project](https://github.com/mautic/recommended-project) locally with Lando. Note that the recommended-project is a production instance and using it for local development isn't advised, see issue '[APP_ENV=dev is not working](https://github.com/mautic/recommended-project/issues/82)'. The recommended-project allows you to set up a default instance of Mautic and use it.

## Requirement

- [Lando](https://docs.lando.dev/install/macos.html)
- [PHP](https://www.php.net/manual/en/install.php) | [Install with Brew](https://formulae.brew.sh/formula/php)
- [Composer](https://getcomposer.org/) | [Install with Brew](https://formulae.brew.sh/formula/composer)

## Guideline

1. Create your project directory
   ```bash
   mkdir mautic-lando && cd mautic-lando
   ```
2. Use the [Mautic recommended project](https://github.com/mautic/recommended-project) to set up a local instance. The following command will download the composer.json file.
   ```bash
   composer create-project mautic/recommended-project:^5.0 . --no-interaction --no-install
   ```
3. Inside the directory root, run `lando init` command to initiate the Lando setup.

   | Question                                                | Answer                             |
   | ------------------------------------------------------- | ---------------------------------- |
   | From where should we get your app's codebase?           | Select ‘current working directory’ |
   | What recipe do you want to use?                         | Select ‘lamp’                      |
   | Where is your webroot relative to the init destination? | Select ‘docroot‘                   |

   Afterward it will ask for the application name. Once that is done, you are finished setting up, and your bare lando.yml file will look like this.

   ```
   name: mautic
   recipe: lamp
   config:
     webroot: docroot
   ```

4. Configure services and tooling support. Ref: [Extending And Tooling Support](https://www.axelerant.com/blog/explained-local-mautic-development-using-lando#H2615)

   - Specify the PHP and MySQL versions to be used. Mautic does not support PHP version 8.3 at this time so we're using 8.2.
   - Configure Mailhog to check and view the sample emails locally.
   - [Installing Node in Your Lando PHP Service](https://docs.lando.dev/plugins/php/guides/installing-node.html#installing-node-in-your-lando-php-service)

   Your final .lango.yml should look like this.

   ```yaml
   name: mautic-lando
   recipe: lamp
   config:
     webroot: docroot
     php: "8.2"
     database: mysql:5.7

   tooling:
     mt:
       service: appserver
       description: Run Mautic commands
       cmd: php bin/console
     node:
       service: appserver
     npm:
       service: appserver
   proxy:
     mailhog:
       - mail.mautic-contrib.lndo.site
   services:
     mailhog:
       type: mailhog
       portforward: true
     appserver:
       type: php:8.2
       build_as_root:
         - docker-php-ext-install sockets
         - docker-php-ext-configure imap --with-kerberos --with-imap-ssl && docker-php-ext-install imap
         # Note that you will want to use the script for the major version of node you want to install
         # See: https://github.com/nodesource/distributions/blob/master/README.md#installation-instructions
         - curl -sL https://deb.nodesource.com/setup_22.x | bash -
         - apt-get install -y nodejs
       xdebug: true
       config:
         php: .lando/php/php.ini
   ```

5. Create a php.ini file
   ```bash
   mkdir -p .lando/php && touch .lando/php/php.ini
   ```
6. Add suggested config by Mautic during site install to php.ini file
   ```php
   zend.assertions = -1
   ```
7. Start up the containers with `lando start`
8. Open the given URL (eg: https://mautic-lando.lndo.site) in your browser which should return a 404 error.
9. Install the project with composer with `lando composer install`. Ref: [Mautic doc on installing with composer](https://docs.mautic.org/en/5.x/getting_started/how_to_install_mautic.html#installing-with-composer)
10. Once the project files are installed, head back to the URL where you will be redirected to the Mautic installer.
11. Run `lando info` to get the database information needed during the installation process.
12. Use `lando db-export` and `lando db-import` to preserve any content you create.

## Issues related to installation

### Solutions from [Team 3](https://github.com/Randolph-dev/Druid_Partnering_Project_React24k)

Possible issues during Mautic set up (outdated with the latest update)
Some issues may appear during Mautic's installation process. Most of which are caused by the composer install. Some of them can be:

Memory exhaustion issue with PHP - allowed PHP memory space isn't enough to handle the operations required for the install. Solution: increase memory limit with

```bash
php -d memory_limit=-1 bin/
```

Composer extension errors - failure to install in the working repository. Solution: Ran composer with ignore commands to keep the install process while ignoring the problematic extensions

```bash
composer install --ignore-platform-req=ext-imap --ignore-platform-req=ext-redis
```

Security issues - Some files can be interrupted during the install due to dubios origin/authors. This can be solved by whitelisting the files.
If you encounter issues such as too many files being commited, this is possibly caused by .gitignore failing to properly ignore the specified content. Run `git rm -r --cached .` (or to force) `git rm -r --cached . -f` to clear tracking of all files and re-add only the files specified for tracking based on .gitignore settings.
