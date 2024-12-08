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

/* @bundles/EmailBundle/Assets/WebhookPayload/email_on_open.json */
class __TwigTemplate_aac5fd6a6ba526002da7b43b45bb1de4 extends Template
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
        yield "{\"stat\":{\"id\":8,\"emailAddress\":\"test@test.com\",\"ipAddress\":{},\"dateSent\":\"2015-08-26T01:34:37+00:00\",\"isRead\":true,\"isFailed\":false,\"dateRead\":\"2015-08-26T01:35:53+00:00\",\"retryCount\":0,\"source\":\"email\",\"openCount\":1,\"lastOpened\":\"2015-08-26T01:35:53+00:00\",\"sourceId\":5,\"trackingHash\":\"55dd17adace91\",\"viewedInBrowser\":false,\"lead\":{\"id\":26,\"points\":10,\"color\":\"\",\"fields\":{\"core\":{\"title\":{\"id\":\"1\",\"label\":\"Title\",\"alias\":\"title\",\"type\":\"lookup\",\"group\":\"core\",\"value\":\"\"},\"firstname\":{\"id\":\"2\",\"label\":\"First Name\",\"alias\":\"firstname\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"},\"lastname\":{\"id\":\"3\",\"label\":\"Last Name\",\"alias\":\"lastname\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"},\"company\":{\"id\":\"4\",\"label\":\"Company\",\"alias\":\"company\",\"type\":\"lookup\",\"group\":\"core\",\"value\":\"\"},\"position\":{\"id\":\"5\",\"label\":\"Position\",\"alias\":\"position\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"},\"email\":{\"id\":\"6\",\"label\":\"Email\",\"alias\":\"email\",\"type\":\"email\",\"group\":\"core\",\"value\":\"test@test.com\"},\"phone\":{\"id\":\"7\",\"label\":\"Phone\",\"alias\":\"phone\",\"type\":\"tel\",\"group\":\"core\",\"value\":\"\"},\"mobile\":{\"id\":\"8\",\"label\":\"Mobile\",\"alias\":\"mobile\",\"type\":\"tel\",\"group\":\"core\",\"value\":\"\"},\"fax\":{\"id\":\"9\",\"label\":\"Fax\",\"alias\":\"fax\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"},\"address1\":{\"id\":\"10\",\"label\":\"Address Line 1\",\"alias\":\"address1\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"},\"address2\":{\"id\":\"11\",\"label\":\"Address Line 2\",\"alias\":\"address2\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"},\"city\":{\"id\":\"12\",\"label\":\"City\",\"alias\":\"city\",\"type\":\"lookup\",\"group\":\"core\",\"value\":\"\"},\"state\":{\"id\":\"13\",\"label\":\"State\",\"alias\":\"state\",\"type\":\"region\",\"group\":\"core\",\"value\":\"\"},\"zipcode\":{\"id\":\"14\",\"label\":\"Zipcode\",\"alias\":\"zipcode\",\"type\":\"lookup\",\"group\":\"core\",\"value\":\"\"},\"country\":{\"id\":\"15\",\"label\":\"Country\",\"alias\":\"country\",\"type\":\"country\",\"group\":\"core\",\"value\":\"\"},\"website\":{\"id\":\"16\",\"label\":\"Website\",\"alias\":\"website\",\"type\":\"text\",\"group\":\"core\",\"value\":\"\"}},\"social\":{\"twitter\":{\"id\":\"17\",\"label\":\"Twitter\",\"alias\":\"twitter\",\"type\":\"text\",\"group\":\"social\",\"value\":\"\"},\"facebook\":{\"id\":\"18\",\"label\":\"Facebook\",\"alias\":\"facebook\",\"type\":\"text\",\"group\":\"social\",\"value\":\"\"},\"skype\":{\"id\":\"20\",\"label\":\"Skype\",\"alias\":\"skype\",\"type\":\"text\",\"group\":\"social\",\"value\":\"\"},\"instagram\":{\"id\":\"21\",\"label\":\"Instagram\",\"alias\":\"instagram\",\"type\":\"text\",\"group\":\"social\",\"value\":\"\"},\"foursquare\":{\"id\":\"22\",\"label\":\"Foursquare\",\"alias\":\"foursquare\",\"type\":\"text\",\"group\":\"social\",\"value\":\"\"}},\"personal\":[],\"professional\":[]}},\"email\":{\"id\":5,\"name\":\"Email\",\"subject\":\"Email\",\"language\":\"en\",\"category\":null,\"fromAddress\":null,\"fromName\":null,\"replyToAddress\":null,\"bccAddress\":null,\"publishUp\":null,\"publishDown\":null,\"readCount\":1,\"sentCount\":3,\"revision\":1,\"assetAttachments\":[],\"variantStartDate\":null,\"variantSentCount\":0,\"variantReadCount\":0,\"variantParent\":null,\"variantChildren\":[]}}}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/EmailBundle/Assets/WebhookPayload/email_on_open.json";
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
        return new Source("", "@bundles/EmailBundle/Assets/WebhookPayload/email_on_open.json", "/app/docroot/app/bundles/EmailBundle/Assets/WebhookPayload/email_on_open.json");
    }
}
