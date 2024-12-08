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

/* @bundles/UserBundle/Model/PasswordStrengthEstimatorModel.php */
class __TwigTemplate_517e31b54adacaff6448b0f2bef9f113 extends Template
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

namespace Mautic\\UserBundle\\Model;

use Mautic\\UserBundle\\Event\\PasswordStrengthValidateEvent;
use Mautic\\UserBundle\\UserEvents;
use Symfony\\Component\\EventDispatcher\\EventDispatcherInterface;
use ZxcvbnPhp\\Zxcvbn as PasswordStrengthEstimator;

class PasswordStrengthEstimatorModel
{
    public const MINIMUM_PASSWORD_STRENGTH_ALLOWED = 3;

    private const DICTIONARY = [
        'mautic',
        'user',
        'lead',
        'bundle',
        'campaign',
        'company',
    ];

    private PasswordStrengthEstimator \$passwordStrengthEstimator;

    public function __construct(private EventDispatcherInterface \$dispatcher)
    {
        \$this->passwordStrengthEstimator = new PasswordStrengthEstimator();
    }

    /**
     * @param string[] \$dictionary
     */
    public function validate(?string \$password, int \$score = self::MINIMUM_PASSWORD_STRENGTH_ALLOWED, array \$dictionary = self::DICTIONARY): bool
    {
        \$isValid = \$score <= \$this->passwordStrengthEstimator->passwordStrength(\$password, \$this->sanitizeDictionary(\$dictionary))['score'];

        \$passwordStrengthValidateEvent = new PasswordStrengthValidateEvent(\$isValid, \$password);
        \$this->dispatcher->dispatch(\$passwordStrengthValidateEvent, UserEvents::USER_PASSWORD_STRENGTH_VALIDATION);

        return \$passwordStrengthValidateEvent->isValid;
    }

    /**
     * @param string[] \$dictionary
     *
     * @return string[]
     */
    private function sanitizeDictionary(array \$dictionary): array
    {
        return array_unique(array_filter(\$dictionary));
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
        return "@bundles/UserBundle/Model/PasswordStrengthEstimatorModel.php";
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
        return new Source("", "@bundles/UserBundle/Model/PasswordStrengthEstimatorModel.php", "/app/docroot/app/bundles/UserBundle/Model/PasswordStrengthEstimatorModel.php");
    }
}
