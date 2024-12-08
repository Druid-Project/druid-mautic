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

/* @bundles/PageBundle/EventListener/StatsSubscriber.php */
class __TwigTemplate_17c42fa56601d43c645780f9f36cf773 extends Template
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

namespace Mautic\\PageBundle\\EventListener;

use Doctrine\\ORM\\EntityManager;
use Mautic\\CoreBundle\\EventListener\\CommonStatsSubscriber;
use Mautic\\CoreBundle\\Security\\Permissions\\CorePermissions;
use Mautic\\PageBundle\\Entity\\Hit;
use Mautic\\PageBundle\\Entity\\Redirect;
use Mautic\\PageBundle\\Entity\\Trackable;
use Mautic\\PageBundle\\Entity\\VideoHit;

class StatsSubscriber extends CommonStatsSubscriber
{
    public function __construct(CorePermissions \$security, EntityManager \$entityManager)
    {
        parent::__construct(\$security, \$entityManager);
        \$this->addContactRestrictedRepositories(
            [
                Hit::class,
                VideoHit::class,
            ]
        );

        \$this->repositories[] = \$entityManager->getRepository(Redirect::class);
        \$this->repositories[] = \$entityManager->getRepository(Trackable::class);
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
        return "@bundles/PageBundle/EventListener/StatsSubscriber.php";
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
        return new Source("", "@bundles/PageBundle/EventListener/StatsSubscriber.php", "/app/docroot/app/bundles/PageBundle/EventListener/StatsSubscriber.php");
    }
}
