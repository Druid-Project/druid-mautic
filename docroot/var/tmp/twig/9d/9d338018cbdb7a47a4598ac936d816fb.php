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

/* @bundles/EmailBundle/Helper/MailHashHelper.php */
class __TwigTemplate_f17ee83db2862a2313c44e3d09a705d6 extends Template
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

namespace Mautic\\EmailBundle\\Helper;

use Mautic\\CoreBundle\\Helper\\CoreParametersHelper;

final class MailHashHelper
{
    public function __construct(private CoreParametersHelper \$coreParametersHelper)
    {
    }

    public function getEmailHash(string \$email): string
    {
        \$secret = \$this->coreParametersHelper->get('secret_key');

        return self::getEmailHashForSecret(\$email, \$secret);
    }

    public static function getEmailHashForSecret(string \$email, string \$secret): string
    {
        return hash_hmac('sha256', \$email, \$secret);
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
        return "@bundles/EmailBundle/Helper/MailHashHelper.php";
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
        return new Source("", "@bundles/EmailBundle/Helper/MailHashHelper.php", "/app/docroot/app/bundles/EmailBundle/Helper/MailHashHelper.php");
    }
}
