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

/* @bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php */
class __TwigTemplate_e0e3bdcbf7484f97e3ab714e21ed6aa9 extends Template
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

namespace Mautic\\EmailBundle\\DependencyInjection\\EnvProcessor;

use Mautic\\CoreBundle\\Helper\\Dsn\\Dsn;
use Symfony\\Component\\DependencyInjection\\EnvVarProcessorInterface;

class MailerDsnEnvVarProcessor implements EnvVarProcessorInterface
{
    public function getEnv(\$prefix, \$name, \\Closure \$getEnv)
    {
        \$env = \$getEnv(\$name);
        try {
            Dsn::fromString(\$env);

            return str_replace('%%', '%', \$env);
        } catch (\\InvalidArgumentException) {
            return 'invalid://null';
        }
    }

    public static function getProvidedTypes()
    {
        return [
            'mailer'         => 'string',
            'urlencoded-dsn' => 'string',
        ];
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
        return "@bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php";
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
        return new Source("", "@bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php", "/app/docroot/app/bundles/EmailBundle/DependencyInjection/EnvProcessor/MailerDsnEnvVarProcessor.php");
    }
}
