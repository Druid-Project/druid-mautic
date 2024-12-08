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

/* @bundles/FormBundle/Event/Service/FieldValueTransformer.php */
class __TwigTemplate_15f75b144bb8b6fb35ba999147b8804e extends Template
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

namespace Mautic\\FormBundle\\Event\\Service;

use Mautic\\FormBundle\\Entity\\Field;
use Mautic\\FormBundle\\Event\\SubmissionEvent;
use Symfony\\Component\\Routing\\Generator\\UrlGeneratorInterface;
use Symfony\\Component\\Routing\\RouterInterface;

class FieldValueTransformer
{
    private array \$contactFieldsToUpdate = [];

    private array \$tokensToUpdate = [];

    private bool \$isTransformed = false;

    public function __construct(
        private RouterInterface \$router
    ) {
    }

    public function transformValuesAfterSubmit(SubmissionEvent \$submissionEvent): void
    {
        if (true === \$this->isTransformed) {
            return;
        }

        \$fields              = \$submissionEvent->getForm()->getFields();
        \$contactFieldMatches = \$submissionEvent->getContactFieldMatches();
        \$tokens              = \$submissionEvent->getTokens();

        /** @var Field \$field */
        foreach (\$fields as \$field) {
            switch (\$field->getType()) {
                case 'file':
                    \$newValue = \$this->router->generate(
                        'mautic_form_file_download',
                        [
                            'submissionId' => \$submissionEvent->getSubmission()->getId(),
                            'field'        => \$field->getAlias(),
                        ],
                        UrlGeneratorInterface::ABSOLUTE_URL
                    );

                    \$tokenAlias = \"{formfield={\$field->getAlias()}}\";

                    if (!empty(\$tokens[\$tokenAlias])) {
                        \$this->tokensToUpdate[\$tokenAlias] = \$tokens[\$tokenAlias] = \$newValue;
                    }

                    \$contactFieldAlias = \$field->getMappedField();
                    if ('contact' === \$field->getMappedObject() && !empty(\$contactFieldMatches[\$contactFieldAlias])) {
                        \$this->contactFieldsToUpdate[\$contactFieldAlias] = \$contactFieldMatches[\$contactFieldAlias] = \$newValue;
                    }

                    break;
            }
        }

        \$submissionEvent->setTokens(\$tokens);
        \$submissionEvent->setContactFieldMatches(\$contactFieldMatches);
        \$this->isTransformed = true;
    }

    /**
     * @return array
     */
    public function getContactFieldsToUpdate()
    {
        return \$this->contactFieldsToUpdate;
    }

    /**
     * @return array
     */
    public function getTokensToUpdate()
    {
        return \$this->tokensToUpdate;
    }

    /**
     * @deprecated will be removed in Mautic 4. This should have been a private method. Not actually needed.
     */
    public function isIsTransformed(): bool
    {
        return \$this->isTransformed;
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
        return "@bundles/FormBundle/Event/Service/FieldValueTransformer.php";
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
        return new Source("", "@bundles/FormBundle/Event/Service/FieldValueTransformer.php", "/app/docroot/app/bundles/FormBundle/Event/Service/FieldValueTransformer.php");
    }
}
