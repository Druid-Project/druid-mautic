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

/* @bundles/SmsBundle/Exception/NumberNotFoundException.php */
class __TwigTemplate_6dc1661adae26e47fc3375982756aff5 extends Template
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

namespace Mautic\\SmsBundle\\Exception;

class NumberNotFoundException extends \\Exception
{
    /**
     * @param string \$number
     * @param string \$message
     * @param int    \$code
     */
    public function __construct(
        private \$number,
        \$message = '',
        \$code = 0,
        \\Throwable \$previous = null
    ) {
        if (!\$message) {
            \$message = \"Phone number '{\$number}' not found\";
        }

        parent::__construct(\$message, \$code, \$previous);
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return \$this->number;
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
        return "@bundles/SmsBundle/Exception/NumberNotFoundException.php";
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
        return new Source("", "@bundles/SmsBundle/Exception/NumberNotFoundException.php", "/app/docroot/app/bundles/SmsBundle/Exception/NumberNotFoundException.php");
    }
}
