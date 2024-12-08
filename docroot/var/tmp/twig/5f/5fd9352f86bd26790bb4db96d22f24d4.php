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

/* @bundles/PageBundle/Assets/WebhookPayload/page_on_hit.json */
class __TwigTemplate_b2d3b7aba1edff04aeaa0302fbe1c159 extends Template
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
        yield "{\"hit\":{\"dateHit\":\"2015-08-26T01:32:39+00:00\",\"dateLeft\":null,\"page\":{\"id\":1,\"title\":\"PageHit\",\"alias\":\"pagehit\",\"category\":null},\"redirect\":null,\"email\":null,\"lead\":{\"id\":26,\"points\":10,\"color\":null,\"fields\":{\"core\":{\"title\":{\"id\":\"1\",\"label\":\"Title\",\"alias\":\"title\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"firstname\":{\"id\":\"2\",\"label\":\"First Name\",\"alias\":\"firstname\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"lastname\":{\"id\":\"3\",\"label\":\"Last Name\",\"alias\":\"lastname\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"company\":{\"id\":\"4\",\"label\":\"Company\",\"alias\":\"company\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"position\":{\"id\":\"5\",\"label\":\"Position\",\"alias\":\"position\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"email\":{\"id\":\"6\",\"label\":\"Email\",\"alias\":\"email\",\"type\":\"email\",\"group\":\"core\",\"value\":\"email@formsubmit.com\"},\"phone\":{\"id\":\"7\",\"label\":\"Phone\",\"alias\":\"phone\",\"type\":\"tel\",\"group\":\"core\",\"value\":null},\"mobile\":{\"id\":\"8\",\"label\":\"Mobile\",\"alias\":\"mobile\",\"type\":\"tel\",\"group\":\"core\",\"value\":null},\"fax\":{\"id\":\"9\",\"label\":\"Fax\",\"alias\":\"fax\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"address1\":{\"id\":\"10\",\"label\":\"Address Line 1\",\"alias\":\"address1\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"address2\":{\"id\":\"11\",\"label\":\"Address Line 2\",\"alias\":\"address2\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"city\":{\"id\":\"12\",\"label\":\"City\",\"alias\":\"city\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"state\":{\"id\":\"13\",\"label\":\"State\",\"alias\":\"state\",\"type\":\"region\",\"group\":\"core\",\"value\":null},\"zipcode\":{\"id\":\"14\",\"label\":\"Zipcode\",\"alias\":\"zipcode\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"country\":{\"id\":\"15\",\"label\":\"Country\",\"alias\":\"country\",\"type\":\"country\",\"group\":\"core\",\"value\":null},\"website\":{\"id\":\"16\",\"label\":\"Website\",\"alias\":\"website\",\"type\":\"text\",\"group\":\"core\",\"value\":null}},\"social\":{\"twitter\":{\"id\":\"17\",\"label\":\"Twitter\",\"alias\":\"twitter\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"facebook\":{\"id\":\"18\",\"label\":\"Facebook\",\"alias\":\"facebook\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"skype\":{\"id\":\"20\",\"label\":\"Skype\",\"alias\":\"skype\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"instagram\":{\"id\":\"21\",\"label\":\"Instagram\",\"alias\":\"instagram\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"foursquare\":{\"id\":\"22\",\"label\":\"Foursquare\",\"alias\":\"foursquare\",\"type\":\"text\",\"group\":\"social\",\"value\":null}},\"personal\":[],\"professional\":[]}},\"ipAddress\":{},\"country\":null,\"region\":null,\"city\":null,\"isp\":null,\"organization\":null,\"code\":200,\"referer\":null,\"url\":\"http:\\/\\/mautic-gh.com\\/pagehit\",\"urlTitle\":null,\"userAgent\":\"Mozilla\\/5.0 (Macintosh; Intel Mac OS X 10_9_5) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/44.0.2403.157 Safari\\/537.36\",\"remoteHost\":\"localhost\",\"pageLanguage\":\"en\",\"browserLanguages\":[\"en-US\",\"en;q=0.8\"],\"trackingId\":\"833fecc93e16d37baf1530df643b6a8b10714c65\",\"source\":null,\"sourceId\":null}}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PageBundle/Assets/WebhookPayload/page_on_hit.json";
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
        return new Source("", "@bundles/PageBundle/Assets/WebhookPayload/page_on_hit.json", "/app/docroot/app/bundles/PageBundle/Assets/WebhookPayload/page_on_hit.json");
    }
}
