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

/* @bundles/UserBundle/Form/Validator/Constraints/NotWeak.php */
class __TwigTemplate_d16f3ff713c1ce3081ef99ca320edfd4 extends Template
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

namespace Mautic\\UserBundle\\Form\\Validator\\Constraints;

use Mautic\\UserBundle\\Model\\PasswordStrengthEstimatorModel;
use Symfony\\Component\\Validator\\Constraint;

final class NotWeak extends Constraint
{
    public const TOO_WEAK = 'f61e730a-284e-11eb-adc1-0242ac120002';

    protected static \$errorNames = [
        self::TOO_WEAK => 'PASSWORD_TOO_WEAK_ERROR',
    ];

    public string \$message = 'This password is too weak. Consider using a stronger password.';

    public int \$score = PasswordStrengthEstimatorModel::MINIMUM_PASSWORD_STRENGTH_ALLOWED;
}
";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "@bundles/UserBundle/Form/Validator/Constraints/NotWeak.php";
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
        return new Source("", "@bundles/UserBundle/Form/Validator/Constraints/NotWeak.php", "/app/docroot/app/bundles/UserBundle/Form/Validator/Constraints/NotWeak.php");
    }
}
