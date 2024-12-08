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

/* @bundles/FormBundle/Assets/WebhookPayload/form_on_submit.json */
class __TwigTemplate_3210c9618ca1a3b506fbb1b8499cb3dd extends Template
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
        yield "{\"submission\":{\"id\":13,\"ipAddress\":{},\"form\":{\"id\":4,\"name\":\"lead points\",\"alias\":\"leadpoints\",\"category\":null},\"lead\":{\"id\":26,\"points\":10,\"color\":null,\"fields\":{\"core\":{\"title\":{\"id\":\"1\",\"label\":\"Title\",\"alias\":\"title\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"firstname\":{\"id\":\"2\",\"label\":\"First Name\",\"alias\":\"firstname\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"lastname\":{\"id\":\"3\",\"label\":\"Last Name\",\"alias\":\"lastname\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"company\":{\"id\":\"4\",\"label\":\"Company\",\"alias\":\"company\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"position\":{\"id\":\"5\",\"label\":\"Position\",\"alias\":\"position\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"email\":{\"id\":\"6\",\"label\":\"Email\",\"alias\":\"email\",\"type\":\"email\",\"group\":\"core\",\"value\":\"email@formsubmit.com\"},\"phone\":{\"id\":\"7\",\"label\":\"Phone\",\"alias\":\"phone\",\"type\":\"tel\",\"group\":\"core\",\"value\":null},\"mobile\":{\"id\":\"8\",\"label\":\"Mobile\",\"alias\":\"mobile\",\"type\":\"tel\",\"group\":\"core\",\"value\":null},\"fax\":{\"id\":\"9\",\"label\":\"Fax\",\"alias\":\"fax\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"address1\":{\"id\":\"10\",\"label\":\"Address Line 1\",\"alias\":\"address1\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"address2\":{\"id\":\"11\",\"label\":\"Address Line 2\",\"alias\":\"address2\",\"type\":\"text\",\"group\":\"core\",\"value\":null},\"city\":{\"id\":\"12\",\"label\":\"City\",\"alias\":\"city\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"state\":{\"id\":\"13\",\"label\":\"State\",\"alias\":\"state\",\"type\":\"region\",\"group\":\"core\",\"value\":null},\"zipcode\":{\"id\":\"14\",\"label\":\"Zipcode\",\"alias\":\"zipcode\",\"type\":\"lookup\",\"group\":\"core\",\"value\":null},\"country\":{\"id\":\"15\",\"label\":\"Country\",\"alias\":\"country\",\"type\":\"country\",\"group\":\"core\",\"value\":null},\"website\":{\"id\":\"16\",\"label\":\"Website\",\"alias\":\"website\",\"type\":\"text\",\"group\":\"core\",\"value\":null}},\"social\":{\"twitter\":{\"id\":\"17\",\"label\":\"Twitter\",\"alias\":\"twitter\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"facebook\":{\"id\":\"18\",\"label\":\"Facebook\",\"alias\":\"facebook\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"skype\":{\"id\":\"20\",\"label\":\"Skype\",\"alias\":\"skype\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"instagram\":{\"id\":\"21\",\"label\":\"Instagram\",\"alias\":\"instagram\",\"type\":\"text\",\"group\":\"social\",\"value\":null},\"foursquare\":{\"id\":\"22\",\"label\":\"Foursquare\",\"alias\":\"foursquare\",\"type\":\"text\",\"group\":\"social\",\"value\":null}},\"personal\":[],\"professional\":[]}},\"trackingId\":\"dd4adafdabe75184bc206037a15d9f840adb5ec0\",\"dateSubmitted\":\"2015-08-26T01:30:34+00:00\",\"referer\":\"http:\\/\\/mautic-gh.com\\/s\\/forms\\/preview\\/4\",\"page\":null,\"results\":{\"email\":\"email@formsubmit.com\"}}}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/FormBundle/Assets/WebhookPayload/form_on_submit.json";
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
        return new Source("", "@bundles/FormBundle/Assets/WebhookPayload/form_on_submit.json", "/app/docroot/app/bundles/FormBundle/Assets/WebhookPayload/form_on_submit.json");
    }
}
