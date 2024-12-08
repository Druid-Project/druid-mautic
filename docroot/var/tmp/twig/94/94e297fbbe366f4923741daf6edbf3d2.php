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

/* @bundles/CoreBundle/Controller/FormErrorMessagesTrait.php */
class __TwigTemplate_2908ab558fa1acf16b57d721cebdc014 extends Template
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

namespace Mautic\\CoreBundle\\Controller;

use Symfony\\Component\\Form\\FormInterface;

trait FormErrorMessagesTrait
{
    /**
     * @param array<mixed> \$formErrors
     */
    public function getFormErrorMessage(array \$formErrors): string
    {
        \$msg = '';

        foreach (\$formErrors as \$key => \$error) {
            if (!\$error) {
                continue;
            }

            if (\$msg) {
                \$msg .= ', ';
            }

            if (is_string(\$key)) {
                \$msg .= \$key.': ';
            }

            if (is_array(\$error)) {
                \$msg .= \$this->getFormErrorMessage(\$error);
            } else {
                \$msg .= \$error;
            }
        }

        return \$msg;
    }

    /**
     * @param FormInterface<mixed> \$form
     *
     * @return array<array<string|null>>
     */
    public function getFormErrorMessages(FormInterface \$form): array
    {
        \$errors = [];

        foreach (\$form->getErrors(true) as \$error) {
            if (isset(\$errors[\$error->getOrigin()->getName()])) {
                \$errors[\$error->getOrigin()->getName()] = [\$error->getMessage()];
            } else {
                \$errors[\$error->getOrigin()->getName()][] = \$error->getMessage();
            }
        }

        return \$errors;
    }

    /**
     * @param FormInterface<mixed> \$form
     *
     * @return array<string|null>
     */
    public function getFormErrorCodes(FormInterface \$form): array
    {
        \$codes = [];

        foreach (\$form->getErrors(true) as \$error) {
            \$code         = \$error->getCause()->getCode();
            \$codes[\$code] = \$code;
        }

        return \$codes;
    }

    /**
     * @param FormInterface<mixed> \$form
     */
    public function getFormErrorForBuilder(FormInterface \$form): ?string
    {
        if (!\$form->isSubmitted() || \$form->isValid()) {
            return null;
        }

        \$validationErrors = \$this->getFormErrorMessages(\$form);

        if (!\$validationErrors) {
            return null;
        }

        \$validationError = \$this->getFormErrorMessage(\$validationErrors);

        return \$this->translator->trans('mautic.core.form.builder.error', ['%error%' => \$validationError]);
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
        return "@bundles/CoreBundle/Controller/FormErrorMessagesTrait.php";
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
        return new Source("", "@bundles/CoreBundle/Controller/FormErrorMessagesTrait.php", "/app/docroot/app/bundles/CoreBundle/Controller/FormErrorMessagesTrait.php");
    }
}
