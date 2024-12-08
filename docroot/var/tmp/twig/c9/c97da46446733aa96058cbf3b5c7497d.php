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

/* @bundles/MessengerBundle/Service/TestMessageFactory.php */
class __TwigTemplate_0be5f89c1c2c2f8a5b9c3b7e32363e40 extends Template
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

namespace Mautic\\MessengerBundle\\Service;

use Mautic\\CoreBundle\\Helper\\UserHelper;
use Mautic\\MessengerBundle\\Message\\TestEmail;
use Mautic\\MessengerBundle\\Message\\TestFailed;
use Mautic\\MessengerBundle\\Message\\TestHit;

class TestMessageFactory
{
    public function __construct(
        private UserHelper \$userHelper
    ) {
    }

    public function crateMessageByDsnKey(string \$key): object
    {
        return match (\$key) {
            'messenger_dsn_email'  => new TestEmail(\$this->userHelper->getUser()->getId()),
            'messenger_dsn_hit'    => new TestHit(\$this->userHelper->getUser()->getId()),
            'messenger_dsn_failed' => new TestFailed(\$this->userHelper->getUser()->getId()),
            default                => throw new \\InvalidArgumentException(sprintf('Unsupported key: \"%s\"', \$key)),
        };
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
        return "@bundles/MessengerBundle/Service/TestMessageFactory.php";
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
        return new Source("", "@bundles/MessengerBundle/Service/TestMessageFactory.php", "/app/docroot/app/bundles/MessengerBundle/Service/TestMessageFactory.php");
    }
}
