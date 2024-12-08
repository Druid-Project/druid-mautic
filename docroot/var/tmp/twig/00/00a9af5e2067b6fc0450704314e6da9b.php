<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* @bundles/InstallBundle/Translations/en_US/messages.ini */
class __TwigTemplate_f9b206a96404865df4d2e019bd27f224 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 1
        yield "mautic.install.composer.dependencies=\"Vendor libraries must be installed. If you are running Mautic from source, please run 'composer install'. If you downloaded Mautic, please check for the 'vendor' folder.\"
mautic.install.config.unwritable=\"Mautic is unable to write your configuration file to the appropriate location. Please check your filesystem permissions to ensure the following path is writable: <strong>%path%</strong>.\"
mautic.install.database.installing=\"Verifying the details and creating the database. This may take a few seconds.\"
mautic.install.database.introtext=\"To function properly, Mautic requires a connection to a database server. Use this form to provide the required details for this connection.\"
mautic.install.date.timezone.not.set=\"The <strong>date.timezone</strong> setting is not set in your PHP configuration. Mautic has set the default timezone to 'UTC' but we suggest setting this in your PHP configuration.\"
mautic.install.detect.unicode=\"The detect_unicode setting should be disabled in your PHP configuration.\"
mautic.install.directory.unwritable=\"The %path% directory must be writable. Change the permissions of the <strong>%path%</strong> directory so that the web server can write into it.\"
mautic.install.extension.curl=\"Install and enable the <strong>curl</strong> extension.\"
mautic.install.extension.fileinfo=\"Install and enable the <strong>fileinfo</strong> extension.\"
mautic.install.extension.imap=\"Install and enable the <strong>imap</strong> extension to support monitored email.\"
mautic.install.extension.mbstring=\"Install and enable the <strong>mbstring</string> extension.\"
mautic.install.extension.openssl=\"Install and enable the <strong>openssl</strong> extension. If open_basedir is enabled, ensure it has access to /dev/random or /dev/urandom.\"
mautic.install.extension.zip=\"Install and enable the <strong>zip</strong> extension. This is required to allow Mautic to install language packages and perform updates within the application.\"
mautic.install.final.step=\"Finish\"
mautic.install.finalizing=\"Finalizing the installation. This may take a few seconds.\"
mautic.install.form.backup_prefix=\"Prefix for backup tables\"
mautic.install.form.cache_path=\"Cache directory path\"
mautic.install.form.database.driver=\"Database Driver\"
mautic.install.form.database.host=\"Database Host\"
mautic.install.form.database.name=\"Database Name\"
mautic.install.form.database.password=\"Database Password\"
mautic.install.form.database.port=\"Database Port\"
mautic.install.form.database.secret=\"Site Secret Value\"
mautic.install.form.database.table.prefix=\"Database Table Prefix\"
mautic.install.form.database.user=\"Database Username\"
mautic.install.form.existing_tables=\"Backup existing tables?\"
mautic.install.form.existing_tables_descr=\"If set to no, conflicting tables will be dropped.\"
mautic.install.form.log_path=\"Log directory path\"
mautic.install.form.none=\"None\"
mautic.install.form.update_stability=\"Minimum Stability\"
mautic.install.form.user.email=\"E-mail Address\"
mautic.install.form.user.password=\"Admin Password\"
mautic.install.form.user.username=\"Admin Username\"
mautic.install.function.ctypealpha=\"Install and enable the <strong>ctype</strong> extension.\"
mautic.install.function.iconv=\"Install and enable the <strong>iconv</strong> extension.\"
mautic.install.function.jsonencode=\"Install and enable the <strong>JSON</strong> extension.\"
mautic.install.function.mbstring=\"Install and enable the <strong>mbstring</strong> extension.\"
mautic.install.function.posix.enable=\"Enable the <strong>php_posix</strong> extension (used to colorize command line output).\"
mautic.install.function.sessionstart=\"Install and enable the <strong>session</strong> extension.\"
mautic.install.function.simplexml=\"Install and enable the <strong>SimpleXML</strong> extension.\"
mautic.install.function.tokengetall=\"Install and enable the <strong>Tokenizer</strong> extension.\"
mautic.install.function.xml=\"Install and enable the <strong>XML</strong> extension.\"
mautic.install.memory.limit=\"The <strong>memory_limit</strong> setting in your PHP configuration is lower than the suggested minimum limit of %min_memory_limit%. Mautic can have performance issues with large datasets without sufficient memory.\"
mautic.install.heading.check.environment=\"Mautic Installation - Environment Check\"
mautic.install.heading.configured=\"Mautic is installed! Visit <a href='https://www.mautic.org/getting-started' target='_blank'>Getting Started</a> for the next steps.\"
mautic.install.heading.database.configuration=\"Mautic Installation - Database Setup\"
mautic.install.heading.final=\"Mautic Installation - Final Steps\"
mautic.install.heading.finished=\"Well Done!\"
mautic.install.heading.major.problems=\"Major Problems that need to be fixed now\"
mautic.install.heading.minor.problems=\"Some Recommendations\"
mautic.install.heading.misc.configuration=\"Mautic Installation - Miscellaneous\"
mautic.install.heading.ready=\"Ready to Install!\"
mautic.install.heading.user.configuration=\"Mautic Installation - Administrative User\"
mautic.install.intl.config=\"The intl extension is not performing as expected. Please check that PHP's intl extension is installed and configured properly.\"
mautic.install.zend_assertions=\"Configure <code>zend.assertions = -1</code> in php.ini for production environments for faster and more stable execution.\"
mautic.install.magic_quotes_enabled=\"Your server has PHP's <strong>magic_quotes_gpc</strong> option enabled, please disable this option to use Mautic.\"
mautic.install.minimum.php.version=\"Your server does not meet the minimum PHP requirements. Mautic requires PHP version %minimum% while your server has %installed%. Please contact your host to update your PHP installation.\"
mautic.install.misc.header.paths=\"Where should the logs and cache be stored?\"
mautic.install.misc.header.stability=\"Set the update stability path\"
mautic.install.misc.header.url=\"Full URL to this site\"
mautic.install.misc.subheader.paths=\"Set the absolute path to a couple directories Mautic uses. It is recommended that these be outside the publicly available web root.\"
mautic.install.misc.subheader.stability=\"You are installing a non-stable version of Mautic (such as a beta release). Mautic defaults to showing only stable releases. You can optionally choose to fetch updates for non-stable releases here by choosing a minimum upgrade stability. For example, by selecting the Beta channel, you will be shown beta releases as well as stable releases.\"
mautic.install.misc.subheader.url=\"Some features, such as scheduled campaigns and/or campaigns that are based on a contact's lack of interaction, will need to be triggered by a cron job. Mautic will need to know the site URL for these instances in order to properly generate landing page, asset, and clickthrough (redirect) URLs.\"
mautic.install.module.intl=\"Install and enable the <strong>intl</strong> extension.\"
mautic.install.module.phpxml=\"Install and enable the <strong>PHP-XML</strong> module.\"
mautic.install.next.step=\"Next Step\"
mautic.install.password.minlengt=\"Your password must be at least six characters long\"
mautic.install.pdo.drivers=\"Please install the mysql PDO Driver\"
mautic.install.pdo.mandatory=\"PDO Extension is mandatory\"
mautic.install.php.version.has.only.security.support=\"You have PHP version %phpversion% installed which is only receiving security fixes at this time. This means your PHP version will soon no longer be supported. We recommend planning to upgrade to a newer PHP version. You can view which PHP versions are actively supported <a href='http://php.net/supported-versions.php' target='_blank'>at PHP.net</a>.\"
mautic.install.php.version.not.supported=\"You have PHP version installed which is no longer supported by the PHP project or Mautic. We highly recommend upgrading your server to a newer PHP version. You can view which PHP versions are actively supported <a href='http://php.net/supported-versions.php' target='_blank'>at PHP.net</a>.\"
mautic.install.please.wait=\"Please wait\"
mautic.install.sentence.config.written=\"Your local.php configuration file has been overwritten with these parameters (in <em>%path%</em>):\"
mautic.install.sentence.major.problems=\"We have detected <strong>%majors%</strong> major problems. You <em>must</em> fix them before continuing:\"
mautic.install.sentence.minor.problems=\"We have detected some minor things that we <em>recommend</em> changing in order to have a better Mautic experience:\"
mautic.install.sentence.proceed.to.mautic=\"Proceed to Mautic\"
mautic.install.sentence.ready=\"Great! Your environment is ready for Mautic.\"
mautic.install.ssl.certificate=\"It is recommended to secure your installation with an SSL certificate (https). Starting February 2020 Google Chrome will stop sending third-party cookies in cross-site requests unless the cookies are secure. Tracking will stop working for Mautic instances running on HTTP. Use HTTPS.\"
mautic.install.step.1=\"1\"
mautic.install.step.2=\"2\"
mautic.install.step.3=\"3\"
mautic.install.step.4=\"4\"
mautic.install.step.5=\"5\"
mautic.install.suhosin.whitelist=\"Suhosin is not properly configured, add <strong>phar</strong> to <strong>suhosin.executor.include.whitelist</strong> in your PHP configuration.\"
mautic.install.timezone.not.supported=\"Your default timezone is not supported by PHP. Check for typos in your PHP configuration.\"
mautic.install.user.introtext=\"Create the admin user for your Mautic installation.\"
mautic.install.xdebug.exception.trace=\"Xdebug's 'show_exception_trace' option should be disabled in your PHP configuration.\"
mautic.install.xdebug.nesting=\"Set <strong>xdebug.max_nesting_level</strong> to at least <strong>250</strong> in your PHP configuration to stop Xdebug's infinite recursion protection from erroneously throwing a fatal error.\"
mautic.install.xdebug.scream=\"Xdebug's 'scream' option should be disabled in your PHP configuration.\"
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/InstallBundle/Translations/en_US/messages.ini";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "@bundles/InstallBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/InstallBundle/Translations/en_US/messages.ini");
    }
}