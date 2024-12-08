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

/* @bundles/MarketplaceBundle/Translations/en_US/messages.ini */
class __TwigTemplate_8c636b87328720ef1298da813dbefce8 extends Template
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
        yield "mautic.marketplace.marketplace=\"Marketplace\"
marketplace.title=\"Marketplace <sup>BETA</sup>\"
marketplace.beta.warning=\"<strong>Heads up!</strong> This is a preview of the Mautic Marketplace. Some things might not work as expected yet. <a target='_blank' href='https://docs.mautic.org/en/marketplace'>[Read more]</a>\"
marketplace.composer.required=\"<strong>Heads up!</strong> Technical setup required to install or update plugins. <a target='_blank' href='https://mau.tc/switch-to-composer'>Send these instructions to a developer.</a>\"
mautic.marketplace.permissions.header=\"Marketplace Permissions\"
mautic.marketplace.permissions.packages=\"Packages - User has access to\"
marketplace.vendor=\"Vendor\"
marketplace.downloads=\"Downloads\"
marketplace.favers=\"Stars\"
marketplace.package.github.stars=\"Stars\"
marketplace.package.github.watchers=\"Watchers\"
marketplace.package.github.forks=\"Forks\"
marketplace.package.github.open.issues=\"Open issues\"
marketplace.package.dependents=\"Dependent packages\"
marketplace.package.suggesters=\"Suggested by other packages\"
marketplace.package.total.downloads=\"Total downloads\"
marketplace.package.monthly.downloads=\"Monthly downloads\"
marketplace.package.daily.downloads=\"Daily downloads\"
marketplace.package.version=\"Version\"
marketplace.package.homepage=\"Homepage\"
marketplace.package.create.date=\"Package created\"
marketplace.package.maintainers=\"Package maintainers\"
marketplace.package.license=\"License\"
marketplace.package.issue.tracker=\"Issue tracker\"
marketplace.package.wiki=\"Documentation\"
marketplace.package.version.release.date=\"Release date\"
marketplace.package.required.packages=\"Required packages\"
marketplace.package.keywords=\"Keywords\"
marketplace.other.packages=\"Other packages by %name%\"
marketplace.package.repository=\"Repository\"
marketplace.package.cli.install=\"Install via CLI\"
marketplace.package.cli.install.descr=\"Installing a plugin via Command Line Interface is recommended. To install this plugin, execute this command: <code>bin/console mautic:marketplace:install %vendor%/%package%</code>\"
marketplace.package.latest.stable.version=\"Latest Stable Version\"
marketplace.package.all.versions=\"All Versions\"
marketplace.package.maintainers=\"Maintainers\"
marketplace.package.github.info=\"GitHub Info\"
marketplace.package.packagist.info=\"Packagist Info\"
marketplace.package.install=\"Install\"
marketplace.package.remove=\"Remove\"
marketplace.package.install.failed=\"Installation of the package has failed. Please check Mautic's logs for more details.\"
marketplace.package.install.already.installed=\"This package is already installed on the system.\"
marketplace.package.install.html.failed=\"Something went wrong while installing <strong>%packagename%</strong>. This is the error:\"
marketplace.package.install.html.in.progress=\"<strong>%packagename%</strong> is being installed. This might take a while...\"
marketplace.package.install.html.success=\"Successfully installed <strong>%packagename%</strong>!\"
marketplace.package.install.html.success.continue=\"Go to the plugin page to activate the plugin\"
marketplace.package.request.details.missing=\"The package vendor or name has not been provided. Please try again.\"
marketplace.package.cache.clear.failed=\"Couldn't refresh plugins list. Please ask a developer to check server permissions and try again.\"
marketplace.package.remove.not.installed=\"The selected package is not currently installed and can therefore not be removed. Please try again with a different package name.\"
marketplace.package.remove.failed=\"Removing the package has failed. Please check Mautic's logs for more details.\"
marketplace.package.remove.html.failed=\"Something went wrong while removing <strong>%packagename%</strong>. This is the error:\"
marketplace.package.remove.html.in.progress=\"<strong>%packagename%</strong> is being removed. This might take a while...\"
marketplace.package.remove.html.success=\"Successfully removed <strong>%packagename%</strong>!\"
marketplace.package.remove.html.success.continue=\"Back to Marketplace overview\"
marketplace.latest.version.missing=\"Could not find any version of this package. Please try again later.\"
marketplace.noresults.tip=\"There are no packages available for your version of Mautic. Try upgrading to a newer version.\"
marketplace.clear.cache=\"Refresh plugins list\"
marketplace.clear.cache.tooltip=\"We save some data to make the Marketplace load faster. Click here to update this saved data.\"
marketplace.package.details.close=\"Back to marketplace\"";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/MarketplaceBundle/Translations/en_US/messages.ini";
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
        return new Source("", "@bundles/MarketplaceBundle/Translations/en_US/messages.ini", "/app/docroot/app/bundles/MarketplaceBundle/Translations/en_US/messages.ini");
    }
}