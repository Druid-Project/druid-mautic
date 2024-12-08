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

/* @bundles/PageBundle/Model/Tracking404Model.php */
class __TwigTemplate_7c0aef1dc05e5c4368779e09715c11d7 extends Template
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
        yield "<?php

namespace Mautic\\PageBundle\\Model;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;
use Mautic\\LeadBundle\\Tracker\\ContactTracker;
use Mautic\\PageBundle\\Entity\\Page;
use Mautic\\PageBundle\\Entity\\Redirect;
use Symfony\\Component\\HttpFoundation\\Request;

class Tracking404Model
{
    public function __construct(
        private CoreParametersHelper \$coreParametersHelper,
        private ContactTracker \$contactTracker,
        private PageModel \$pageModel
    ) {
    }

    /**
     * @param Page|Redirect \$entity
     *
     * @throws \\Exception
     */
    public function hitPage(\$entity, Request \$request): void
    {
        \$this->pageModel->hitPage(\$entity, \$request, 404);
    }

    public function isTrackable(): bool
    {
        if (!\$this->coreParametersHelper->get('do_not_track_404_anonymous')) {
            return true;
        }
        // already tracked and identified contact
        if (\$lead = \$this->contactTracker->getContactByTrackedDevice()) {
            if (!\$lead->isAnonymous()) {
                return true;
            }
        }

        return false;
    }
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/PageBundle/Model/Tracking404Model.php";
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
        return new Source("", "@bundles/PageBundle/Model/Tracking404Model.php", "/app/docroot/app/bundles/PageBundle/Model/Tracking404Model.php");
    }
}
