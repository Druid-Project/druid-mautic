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

/* @bundles/MessengerBundle/Message/EmailHitNotification.php */
class __TwigTemplate_5f06775ef6abfc78c56fc1c07a28fd01 extends Template
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

declare(strict_types=1);

namespace Mautic\\MessengerBundle\\Message;

use Mautic\\MessengerBundle\\Message\\Traits\\MessageRequestTrait;
use Symfony\\Component\\HttpFoundation\\Request;

class EmailHitNotification
{
    use MessageRequestTrait;

    public function __construct(
        private string \$statId,
        private Request \$request,
        \\DateTimeInterface \$eventTime = null
    ) {
        \$this->setEventTime(\$eventTime ?? new \\DateTimeImmutable());
    }

    public function getStatId(): string
    {
        return \$this->statId;
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
        return "@bundles/MessengerBundle/Message/EmailHitNotification.php";
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
        return new Source("", "@bundles/MessengerBundle/Message/EmailHitNotification.php", "/app/docroot/app/bundles/MessengerBundle/Message/EmailHitNotification.php");
    }
}
